<?php
/**
 * Manager: View
 *
 * View manager class file.
 *
 * @since   1.0.0
 * @package wsal
 */

use WSAL\Helpers\Classes_Helper;
use WSAL\Controllers\Alert_Manager;
use WSAL\Entities\Occurrences_Entity;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * View Manager.
 *
 * This class includes all the views, initialize them and shows the active one.
 * It creates also the menu items.
 *
 * @package wsal
 */
class WSAL_ViewManager {

	/**
	 * Array of views.
	 *
	 * @var WSAL_AbstractView[]
	 */
	public $views = array();

	/**
	 * Instance of WpSecurityAuditLog.
	 *
	 * @var object
	 */
	protected $plugin;

	/**
	 * Active view.
	 *
	 * @var WSAL_AbstractView|null
	 */
	protected $active_view = false;

	/**
	 * Method: Constructor.
	 *
	 * @param WpSecurityAuditLog $plugin - Instance of WpSecurityAuditLog.
	 *
	 * @since  1.0.0
	 */
	public function __construct( WpSecurityAuditLog $plugin ) {
		$this->plugin = $plugin;

		// Skipped views array.
		$skip_views = array();

		$views = array(
			'WSAL_Views_AuditLog',
			'WSAL_Views_EmailNotifications',
			'WSAL_Views_ExternalDB',
			'WSAL_Views_Help',
			'WSAL_Views_LogInUsers',
			'WSAL_Views_Reports',
			'WSAL_Views_Search',
			'WSAL_Views_Settings',
			'WSAL_Views_SetupWizard',
			'WSAL_Views_ToggleAlerts',
		);

		// phpcs:ignore
		/* @premium:start */
		// Array of views to skip for premium version.
		if ( wsal_freemius()->is_plan_or_trial__premium_only( 'starter' ) ) {
			$skip_views[] = 'WSAL_Views_EmailNotifications';
			$skip_views[] = 'WSAL_Views_Search';
		}

		if ( wsal_freemius()->is_plan_or_trial__premium_only( 'professional' ) ) {
			$skip_views[] = 'WSAL_Views_EmailNotifications';
			$skip_views[] = 'WSAL_Views_Search';
			$skip_views[] = 'WSAL_Views_ExternalDB';
			$skip_views[] = 'WSAL_Views_LogInUsers';
			$skip_views[] = 'WSAL_Views_Reports';
		}
		/* @premium:end */

		/**
		 * Add setup wizard page to skip views. It will only be initialized
		 * one time.
		 *
		 * @since 3.2.3
		 */
		if ( file_exists( WSAL_BASE_DIR . 'classes/Views/SetupWizard.php' ) ) {
			$skip_views[] = 'WSAL_Views_SetupWizard';
		}

		/**
		 * Skipped Views.
		 *
		 * Array of views which are skipped before plugin views are initialized.
		 *
		 * As of version 4.5 this no longer holds a list with files, but the name of the classes (namespaces must be included if they are in use)
		 *
		 * @param array $skip_views - Skipped views.
		 *
		 * @since 4.5.0
		 */
		$skip_views = apply_filters( 'wsal_skip_views', $skip_views );

		$views_to_load = array_diff( $views, $skip_views );

		foreach ( $views_to_load as $view ) {
			if ( Classes_Helper::get_subclasses_of_class( $view, '\WSAL_AbstractView' ) ) {
				$this->views[] = new $view( $this->plugin );
			}
		}
		// // Load views.
		// foreach ( WSAL_Utilities_FileSystemUtils::read_files_in_folder( WSAL_BASE_DIR . 'classes/Views', '*.php' ) as $file ) {
		// if ( empty( $skip_views ) || ! in_array( $file, $skip_views ) ) { // phpcs:ignore
		// $this->add_from_file( $file );
		// }
		// }

		// Stop Freemius from hiding the menu on sub sites under certain circumstances.
		add_filter(
			'fs_should_hide_site_admin_settings_on_network_activation_mode_wp-security-audit-log',
			array(
				$this,
				'bypass_freemius_menu_hiding',
			)
		);

		// Add menus.
		add_action( 'admin_menu', array( $this, 'add_admin_menus' ) );
		add_action( 'network_admin_menu', array( $this, 'add_admin_menus' ) );

		// Add plugin shortcut links.
		add_filter( 'plugin_action_links_' . WSAL_BASE_NAME, array( $this, 'add_plugin_shortcuts' ) );

		// Render header.
		add_action( 'admin_enqueue_scripts', array( $this, 'render_view_header' ) );

		// Render footer.
		add_action( 'admin_footer', array( $this, 'render_view_footer' ) );

		// Initialize setup wizard.
		if ( ! \WSAL\Helpers\Settings_Helper::get_boolean_option_value( 'setup-complete', false )
			&& $this->plugin->settings()->current_user_can( 'edit' )
		) {
			new WSAL_Views_SetupWizard( $plugin );
		}

		/* @premium:start */
		if ( wsal_freemius()->is__premium_only() ) {
			if ( $this->plugin->settings()->is_admin_bar_notif() ) {
				add_action( 'admin_bar_menu', array( $this, 'live_notifications__premium_only' ), 1000, 1 );
				add_action( 'wp_ajax_wsal_adminbar_events_refresh', array( $this, 'wsal_adminbar_events_refresh__premium_only' ) );
			}
		}
		/* @premium:end */

		add_action( 'admin_head', array( $this, 'hide_freemius_sites_section' ) );

		// Check if WFCM is running by seeing if we have the version defined.
		if ( defined( 'WFCM_VERSION' ) && ( version_compare( WFCM_VERSION, '1.6.0', '<' ) ) ) {
			add_action( 'admin_notices', array( $this, 'update_wfcm_notice' ) );
			add_action( 'network_admin_notices', array( $this, 'update_wfcm_notice' ) );
		}
	}

	/**
	 * Display notice if user is using older version of WFCM
	 */
	public function update_wfcm_notice() {
		if ( defined( 'WFCM_VERSION' ) ) {
			if ( version_compare( WFCM_VERSION, '1.6.0', '<' ) ) {
				echo '<div class="notice notice-success">
					<p>' . esc_html__( 'WP Activity Log requires Website File Changes Monitor 1.6.0. Please upgrade that plugin.', 'wp-security-audit-log' ) . '</p>
				</div>';
			}
		}
	}

	/**
	 * Add new view given class name.
	 *
	 * @param string $class Class name.
	 */
	public function add_from_class( $class ) {
		if ( Classes_Helper::get_subclasses_of_class( $class, '\WSAL_AbstractView' ) ) {
			$this->views[] = new $class( $this->plugin );
		}
	}

	/**
	 * Order views by their declared weight.
	 */
	public function reorder_views() {
		usort( $this->views, array( $this, 'order_by_weight' ) );
	}

	/**
	 * Get page order by its weight.
	 *
	 * @internal This has to be public for PHP to call it.
	 * @param WSAL_AbstractView $a - First view.
	 * @param WSAL_AbstractView $b - Second view.
	 * @return int
	 */
	public function order_by_weight( WSAL_AbstractView $a, WSAL_AbstractView $b ) {
		$wa = $a->get_weight();
		$wb = $b->get_weight();
		switch ( true ) {
			case $wa < $wb:
				return -1;
			case $wa > $wb:
				return 1;
			default:
				return 0;
		}
	}

	/**
	 * WordPress Action
	 */
	public function add_admin_menus() {
		$this->reorder_views();

		if ( $this->plugin->settings()->current_user_can( 'view' ) && count( $this->views ) ) {
			// Add main menu.
			$main_view_menu_slug         = $this->views[0]->get_safe_view_name();
			$this->views[0]->hook_suffix = add_menu_page(
				'WP Activity Log',
				'WP Activity Log',
				'read', // No capability requirement.
				$main_view_menu_slug,
				array( $this, 'render_view_body' ),
				$this->views[0]->get_icon(),
				'2.5' // Right after dashboard.
			);

			// Protected views to be displayed only to user with full plugin access.
			$protected_views = array(
				'wsal-togglealerts',
				'wsal-usersessions-views',
				'wsal-settings',
				'wsal-ext-settings',
				'wsal-rep-views-main',
				'wsal-np-notifications',
				'wsal-setup',
			);

			// Check edit privileges of the current user.
			$has_current_user_edit_priv = $this->plugin->settings()->current_user_can( 'edit' );

			// Add menu items.
			foreach ( $this->views as $view ) {
				if ( $view->is_accessible() ) {
					$safe_view_name = $view->get_safe_view_name();
					if ( $this->get_class_name_by_view( $safe_view_name ) ) {
						continue;
					}

					if ( in_array( $safe_view_name, $protected_views ) && ! $has_current_user_edit_priv ) { // phpcs:ignore
						continue;
					}

					if ( $view instanceof WSAL_NP_EditNotification || $view instanceof WSAL_NP_AddNotification ) {
						$main_view_menu_slug = null;
					}

					$view->hook_suffix = add_submenu_page(
						$view->is_visible() ? $main_view_menu_slug : null,
						$view->get_title(),
						$view->get_name(),
						'read', // No capability requirement.
						$safe_view_name,
						array( $this, 'render_view_body' )
					);
				}
			}

			// phpcs:disable
			// phpcs:enable
		}
	}

	/**
	 * WordPress Filter
	 *
	 * @param array $old_links - Array of old links.
	 */
	public function add_plugin_shortcuts( $old_links ) {
		$this->reorder_views();

		$new_links = array();
		foreach ( $this->views as $view ) {
			if ( $view->has_plugin_shortcut_link() ) {
				$new_links[] = '<a href="' . add_query_arg( 'page', $view->get_safe_view_name(), admin_url( 'admin.php' ) ) . '">' . $view->get_name() . '</a>';

				if ( 1 === count( $new_links ) && ! wsal_freemius()->is__premium_only() ) {
					// Trial link.
					$trial_link  = 'https://wpactivitylog.com/trial-premium-edition-plugin/?utm_source=plugin&utm_medium=referral&utm_campaign=WSAL';
					$new_links[] = '<a style="font-weight:bold" href="' . $trial_link . '" target="_blank">' . __( 'Free Premium Trial', 'wp-security-audit-log' ) . '</a>';
				}
			}
		}
		return array_merge( $new_links, $old_links );
	}

	/**
	 * Returns page id of current page (or false on error).
	 *
	 * @return int
	 */
	protected function get_backend_page_index() {
		// Get current view via $_GET array.
		$current_view = ( isset( $_GET['page'] ) ) ? \sanitize_text_field( \wp_unslash( $_GET['page'] ) ) : '';

		if ( isset( $current_view ) ) {
			foreach ( $this->views as $i => $view ) {
				if ( $current_view === $view->get_safe_view_name() ) {
					return $i;
				}
			}
		}
		return false;
	}

	/**
	 * Returns the current active view or null if none.
	 *
	 * @return WSAL_AbstractView|null
	 */
	public function get_active_view() {
		if ( false === $this->active_view ) {
			$this->active_view = null;

			// Get current view via $_GET array.
			$current_view = ( isset( $_GET['page'] ) ) ? \sanitize_text_field( \wp_unslash( $_GET['page'] ) ) : '';

			if ( isset( $current_view ) ) {
				foreach ( $this->views as $view ) {
					if ( $current_view === $view->get_safe_view_name() ) {
						$this->active_view = $view;
					}
				}
			}

			if ( $this->active_view ) {
				$this->active_view->is_active = true;
			}
		}
		return $this->active_view;
	}

	/**
	 * Render header of the current view.
	 */
	public function render_view_header() {
		$view = $this->get_active_view();
		if ( $view ) {
			$view->header();
		}
	}

	/**
	 * Render footer of the current view.
	 */
	public function render_view_footer() {
		$view = $this->get_active_view();
		if ( $view ) {
			$view->footer();
		}

		global $pagenow;
		if ( 'admin.php' === $pagenow && ( isset( $_GET['page'] ) && 'wsal-auditlog-pricing' === $_GET['page'] ) ) {
			?>
			<style>
				.fs-full-size-wrapper {
					margin: 0px 0 -65px -20px !important;
				}

				#root .fs-app-header .fs-page-title h2, #fs_pricing_wrapper .fs-app-header .fs-page-title h2 {
					font-size: 23px;
					font-weight: 400;
					margin: 0;
					padding: 9px 0 4px 20px;
					line-height: 1.3;
				}

				@media only screen and (max-width: 768px) {
					#root #fs_pricing_wrapper .fs-app-main .fs-section--plans-and-pricing .fs-section--packages .fs-packages-menu, #fs_pricing_wrapper #fs_pricing_wrapper .fs-app-main .fs-section--plans-and-pricing .fs-section--packages .fs-packages-menu {
						padding: 5px;
						display: flex;
						width: 100%;
						margin: 0 auto;
					}
				}
			</style>
			<?php
		}
	}

	/**
	 * Render content of the current view.
	 */
	public function render_view_body() {
		$view = $this->get_active_view();
		if ( $view && $view instanceof WSAL_AbstractView ) :
			?>
			<div class="wrap">
				<?php
					$view->render_icon();
					$view->render_title();
					$view->render_content();
				?>
			</div>
			<?php
		endif;
	}

	/**
	 * Returns view instance corresponding to its class name.
	 *
	 * @param string $class_name View class name.
	 * @return WSAL_AbstractView|bool The view or false on failure.
	 */
	public function find_by_class_name( $class_name ) {
		foreach ( $this->views as $view ) {
			if ( $view instanceof $class_name ) {
				return $view;
			}
		}
		return false;
	}

	/**
	 * Method: Returns class name of the view using view name.
	 *
	 * @param  string $view_slug - Slug of view.
	 * @since  1.0.0
	 */
	private function get_class_name_by_view( $view_slug ) {
		$not_show = false;
		switch ( $view_slug ) {
			case 'wsal-emailnotifications':
				if ( class_exists( 'WSAL_NP_Plugin' ) ) {
					$not_show = true;
				}
				break;
			case 'wsal-loginusers':
				if ( class_exists( 'WSAL_UserSessions_Plugin' ) ) {
					$not_show = true;
				}
				break;
			case 'wsal-reports':
				if ( class_exists( 'WSAL_Rep_Plugin' ) ) {
					$not_show = true;
				}
				break;
			case 'wsal-search':
				if ( class_exists( 'WSAL_SearchExtension' ) ) {
					$not_show = true;
				}
				break;
			case 'wsal-externaldb':
				if ( class_exists( 'WSAL_Ext_Plugin' ) ) {
					$not_show = true;
				}
				break;
			default:
				break;
		}
		return $not_show;
	}

	/* @premium:start */
	/**
	 * Add WSAL to WP-Admin menu bar.
	 *
	 * @since 3.2.4
	 *
	 * @param WP_Admin_Bar $admin_bar - Instance of WP_Admin_Bar.
	 */
	public function live_notifications__premium_only( $admin_bar ) {
		if ( $this->plugin->settings()->current_user_can( 'view' ) && is_admin() ) {
			$adn_updates = $this->plugin->settings()->get_admin_bar_notif_updates();
			$event       = Alert_Manager::get_admin_bar_event( 'page-refresh' === $adn_updates );

			if ( $event ) {
				$code = Alert_Manager::get_alert(
					$event['alert_id'],
					(object) array(
						'mesg' => esc_html__( 'Alert message not found.', 'wp-security-audit-log' ),
						'desc' => esc_html__( 'Alert description not found.', 'wp-security-audit-log' ),
					)
				);

				$admin_bar->add_node(
					array(
						'id'    => 'wsal-menu',
						'title' => 'LIVE: ' . $code->desc . ' from ' . $event['client_ip'],
						'href'  => add_query_arg( 'page', 'wsal-auditlog', admin_url( 'admin.php' ) ),
						'meta'  => array( 'class' => 'wsal-live-notif-item' ),
					)
				);
			}
		}
	}

	/**
	 * WP-Admin bar refresh event handler.
	 *
	 * @since 3.2.4
	 */
	public function wsal_adminbar_events_refresh__premium_only() {
		if ( ! $this->plugin->settings()->current_user_can( 'view' ) ) {
			echo wp_json_encode(
				array(
					'success' => false,
					'message' => __( 'Access Denied.', 'wp-security-audit-log' ),
				)
			);
			die();
		}

		if ( ! isset( $_GET['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['nonce'] ) ), 'wsal-common-js-nonce' ) ) {
			echo wp_json_encode(
				array(
					'success' => false,
					'message' => __( 'Nonce verification failed.', 'wp-security-audit-log' ),
				)
			);
			die();
		}

		$event = Alert_Manager::get_admin_bar_event( true );
		$code  = Alert_Manager::get_alert( $event['alert_id'] );

		echo wp_json_encode(
			array(
				'success' => true,
				'message' => 'LIVE: ' . $code->desc . ' from ' . $event['client_ip'],
			)
		);

		die();
	}
	/* @premium:end */

	/**
	 * Hide Freemius sites section on the account page
	 * of a multisite WordPress network.
	 */
	public function hide_freemius_sites_section() {
		global $pagenow;

		// Return if not multisite.
		if ( ! is_multisite() ) {
			return;
		}

		// Return if multisite but not on the network admin.
		if ( ! is_network_admin() ) {
			return;
		}

		// Return if the pagenow is not on admin.php page.
		if ( 'admin.php' !== $pagenow ) {
			return;
		}

		// Get page query parameter.
		$page = isset( $_GET['page'] ) ? sanitize_text_field( wp_unslash( $_GET['page'] ) ) : false; // phpcs:ignore

		if ( 'wsal-auditlog-account' === $page ) {
			echo '<style type="text/css">#fs_sites {display:none;}</style>';
		}
	}

	/**
	 * Bypasses Freemius hiding menu items.
	 *
	 * @param bool $should_hide Should allow Freemium to hide menu items.
	 *
	 * @return bool
	 */
	public function bypass_freemius_menu_hiding( $should_hide ) {
		return false;
	}

	/**
	 * Builds a relative asset path that takes SCRIPT_DEBUG constant into account.
	 *
	 * @param string $path                 Path relative to the plugin folder.
	 * @param string $filename             Filename base (.min is optionally appended to this).
	 * @param string $extension            File extension.
	 * @param bool   $use_minified_version If true, the minified version of the file is used.
	 *
	 * @return string
	 */
	public static function get_asset_path( $path, $filename, $extension, $use_minified_version = true ) {
		$result = $path . $filename . '.';
		if ( $use_minified_version && SCRIPT_DEBUG ) {
			$result .= 'min.';
		}
		$result .= $extension;

		return $result;
	}
}
