<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5213b908ecf1568a565bc3d22aa5177
{
    public static $files = array (
        '2007ccaa29a9efd0493ee82176c977d1' => __DIR__ . '/..' . '/wpwhitesecurity/import-export-plugin-settings/SettingsImportExport.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WSAL\\Extensions\\' => 16,
            'WSAL\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WSAL\\Extensions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/extensions',
        ),
        'WSAL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'RCliTextFormatter' => __DIR__ . '/../..' . '/classes/Ref.php',
        'RFormatter' => __DIR__ . '/../..' . '/classes/Ref.php',
        'RHtmlFormatter' => __DIR__ . '/../..' . '/classes/Ref.php',
        'RTextFormatter' => __DIR__ . '/../..' . '/classes/Ref.php',
        'Tools\\Select2_WPWS' => __DIR__ . '/../..' . '/classes/Select2/class-select2-wpws.php',
        'WSAL\\Actions\\Pluging_Installer' => __DIR__ . '/../..' . '/classes/Actions/class-plugin-installer.php',
        'WSAL\\Adapter\\User_Sessions' => __DIR__ . '/../..' . '/extensions/user-sessions/classes/Adapters/class-user-sessions.php',
        'WSAL\\Adapter\\WSAL_Adapters_MySQL_ActiveRecord' => __DIR__ . '/../..' . '/classes/Adapters/MySQL/ActiveRecordAdapter.php',
        'WSAL\\Adapter\\WSAL_Adapters_MySQL_Meta' => __DIR__ . '/../..' . '/classes/Adapters/MySQL/MetaAdapter.php',
        'WSAL\\Adapter\\WSAL_Adapters_MySQL_Occurrence' => __DIR__ . '/../..' . '/classes/Adapters/MySQL/OccurrenceAdapter.php',
        'WSAL\\Adapter\\WSAL_Adapters_MySQL_Query' => __DIR__ . '/../..' . '/classes/Adapters/MySQL/QueryAdapter.php',
        'WSAL\\Controllers\\Alert_Manager' => __DIR__ . '/../..' . '/classes/Controllers/class-alert-manager.php',
        'WSAL\\Controllers\\Constants' => __DIR__ . '/../..' . '/classes/Controllers/class-constants.php',
        'WSAL\\Controllers\\Plugin_Extensions' => __DIR__ . '/../..' . '/classes/Controllers/class-plugin-extensions.php',
        'WSAL\\Controllers\\Sensors_Load_Manager' => __DIR__ . '/../..' . '/classes/Controllers/class-sensors-load-manager.php',
        'WSAL\\Entities\\Abstract_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-abstract-entity.php',
        'WSAL\\Entities\\Metadata_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-metadata-entity.php',
        'WSAL\\Entities\\Occurrences_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-occurrences-entity.php',
        'WSAL\\Entities\\Options_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-options-entity.php',
        'WSAL\\Extensions\\ExternalDB\\Mirrors\\WSAL_Ext_Mirrors_AWSCloudWatchConnection' => __DIR__ . '/../..' . '/extensions/external-db/classes/mirrors/AWSCloudWatchConnection.php',
        'WSAL\\Extensions\\ExternalDB\\Mirrors\\WSAL_Ext_Mirrors_LogFileConnection' => __DIR__ . '/../..' . '/extensions/external-db/classes/mirrors/LogFileConnection.php',
        'WSAL\\Extensions\\ExternalDB\\Mirrors\\WSAL_Ext_Mirrors_LogglyConnection' => __DIR__ . '/../..' . '/extensions/external-db/classes/mirrors/LogglyConnection.php',
        'WSAL\\Extensions\\ExternalDB\\Mirrors\\WSAL_Ext_Mirrors_PapertrailConnection' => __DIR__ . '/../..' . '/extensions/external-db/classes/mirrors/PapertrailConnection.php',
        'WSAL\\Extensions\\ExternalDB\\Mirrors\\WSAL_Ext_Mirrors_SlackConnection' => __DIR__ . '/../..' . '/extensions/external-db/classes/mirrors/SlackConnection.php',
        'WSAL\\Extensions\\ExternalDB\\Mirrors\\WSAL_Ext_Mirrors_SyslogConnection' => __DIR__ . '/../..' . '/extensions/external-db/classes/mirrors/SyslogConnection.php',
        'WSAL\\Helpers\\Classes_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-classes-helper.php',
        'WSAL\\Helpers\\DateTime_Formatter_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-datetime-formatter-helper.php',
        'WSAL\\Helpers\\Email_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-email-helper.php',
        'WSAL\\Helpers\\File_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-file-helper.php',
        'WSAL\\Helpers\\Logger' => __DIR__ . '/../..' . '/classes/Helpers/class-logger.php',
        'WSAL\\Helpers\\Mirroring_Helper' => __DIR__ . '/../..' . '/extensions/external-db/classes/class-mirroring-helper.php',
        'WSAL\\Helpers\\PHP_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-php-helper.php',
        'WSAL\\Helpers\\Plugins_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-plugins-helper.php',
        'WSAL\\Helpers\\Settings_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-settings-helper.php',
        'WSAL\\Helpers\\User_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-user-helper.php',
        'WSAL\\Helpers\\User_Sessions_Helper' => __DIR__ . '/../..' . '/extensions/user-sessions/classes/class-user-sessions-helper.php',
        'WSAL\\Helpers\\Validator' => __DIR__ . '/../..' . '/classes/Helpers/class-validator.php',
        'WSAL\\Helpers\\WP_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-wp-helper.php',
        'WSAL\\ListAdminEvents\\List_Events' => __DIR__ . '/../..' . '/classes/ListAdminEvents/class-list-events.php',
        'WSAL\\Loggers\\WSAL_Loggers_Database' => __DIR__ . '/../..' . '/classes/Loggers/Database.php',
        'WSAL\\Migration\\Metadata_Migration_440' => __DIR__ . '/../..' . '/classes/Migration/class-metadata-migration-440.php',
        'WSAL\\Multisite\\NetworkWide\\AbstractTracker' => __DIR__ . '/../..' . '/classes/Multisite/NetworkWide/AbstractTracker.php',
        'WSAL\\Multisite\\NetworkWide\\CPTsTracker' => __DIR__ . '/../..' . '/classes/Multisite/NetworkWide/CPTsTracker.php',
        'WSAL\\Multisite\\NetworkWide\\TrackerInterface' => __DIR__ . '/../..' . '/classes/Multisite/NetworkWide/TrackerInterface.php',
        'WSAL\\PluginExtensions\\BBPress_Extension' => __DIR__ . '/../..' . '/classes/PluginExtensions/class-bbpress-extension.php',
        'WSAL\\PluginExtensions\\GravityForms_Extension' => __DIR__ . '/../..' . '/classes/PluginExtensions/class-gravityforms-extension.php',
        'WSAL\\PluginExtensions\\MemberPress_Extension' => __DIR__ . '/../..' . '/classes/PluginExtensions/class-memberpress-extension.php',
        'WSAL\\PluginExtensions\\TablePress_Extension' => __DIR__ . '/../..' . '/classes/PluginExtensions/class-tablepress-extension.php',
        'WSAL\\PluginExtensions\\WFCM_Extension' => __DIR__ . '/../..' . '/classes/PluginExtensions/class-wfcm-extension.php',
        'WSAL\\PluginExtensions\\WPForms_Extension' => __DIR__ . '/../..' . '/classes/PluginExtensions/class-wpforms-extension.php',
        'WSAL\\PluginExtensions\\WooCommerce_Extension' => __DIR__ . '/../..' . '/classes/PluginExtensions/class-woocommerce-extension.php',
        'WSAL\\PluginExtensions\\YoastSeo_Extension' => __DIR__ . '/../..' . '/classes/PluginExtensions/class-yoastseo-extension.php',
        'WSAL\\Utils\\Abstract_Migration' => __DIR__ . '/../..' . '/classes/Migration/class-abstract-migration.php',
        'WSAL\\Utils\\Migration' => __DIR__ . '/../..' . '/classes/Migration/class-migration.php',
        'WSAL\\WP_Sensors\\ACF_Meta_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-acf-meta-sensor.php',
        'WSAL\\WP_Sensors\\Main_WP_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-main-wp-sensor.php',
        'WSAL\\WP_Sensors\\Multisite_Sign_Up_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-multisite-sign-up-sensor.php',
        'WSAL\\WP_Sensors\\User_Sessions_Tracking' => __DIR__ . '/../..' . '/extensions/user-sessions/classes/Sensors/class-user-sessions-tracking-sensor.php',
        'WSAL\\WP_Sensors\\WP_Comments_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-comments-sensor.php',
        'WSAL\\WP_Sensors\\WP_Content_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-content-sensor.php',
        'WSAL\\WP_Sensors\\WP_Database_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-database-sensor.php',
        'WSAL\\WP_Sensors\\WP_Files_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-files-sensor.php',
        'WSAL\\WP_Sensors\\WP_Log_In_Out_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-log-in-out-sensor.php',
        'WSAL\\WP_Sensors\\WP_Menus_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-menus-sensor.php',
        'WSAL\\WP_Sensors\\WP_Meta_Data_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-metadata-sensor.php',
        'WSAL\\WP_Sensors\\WP_Multisite_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-multisite-sensor.php',
        'WSAL\\WP_Sensors\\WP_Plugins_Themes_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-plugins-themes-sensor.php',
        'WSAL\\WP_Sensors\\WP_Register_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-register-sensor.php',
        'WSAL\\WP_Sensors\\WP_Request_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-request-sensor.php',
        'WSAL\\WP_Sensors\\WP_System_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-system-sensor.php',
        'WSAL\\WP_Sensors\\WP_User_Profile_Sensor' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-user-profile-sensor.php',
        'WSAL\\WP_Sensors\\WSAL_Sensors_Widgets' => __DIR__ . '/../..' . '/classes/WPSensors/class-wp-widgets-sensor.php',
        'WSAL_AS_FilterManager' => __DIR__ . '/../..' . '/extensions/search/classes/FilterManager.php',
        'WSAL_AS_Filters_AbstractFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/AbstractFilter.php',
        'WSAL_AS_Filters_AbstractUserAttributeFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/AbstractUserAttributeFilter.php',
        'WSAL_AS_Filters_AbstractWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/AbstractWidget.php',
        'WSAL_AS_Filters_AlertFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/AlertFilter.php',
        'WSAL_AS_Filters_AlertWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/AlertWidget.php',
        'WSAL_AS_Filters_AutoCompleteWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/AutoCompleteWidget.php',
        'WSAL_AS_Filters_CodeFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/CodeFilter.php',
        'WSAL_AS_Filters_CodeWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/CodeWidget.php',
        'WSAL_AS_Filters_DateFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/DateFilter.php',
        'WSAL_AS_Filters_DateWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/DateWidget.php',
        'WSAL_AS_Filters_EventTypeFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/EventTypeFilter.php',
        'WSAL_AS_Filters_EventTypeWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/EventTypeWidget.php',
        'WSAL_AS_Filters_IpFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/IpFilter.php',
        'WSAL_AS_Filters_IpWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/IpWidget.php',
        'WSAL_AS_Filters_ObjectFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/ObjectFilter.php',
        'WSAL_AS_Filters_ObjectWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/ObjectWidget.php',
        'WSAL_AS_Filters_PostIDFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/PostIDFilter.php',
        'WSAL_AS_Filters_PostIDWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/PostIdWidget.php',
        'WSAL_AS_Filters_PostNameFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/PostNameFilter.php',
        'WSAL_AS_Filters_PostNameWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/PostNameWidget.php',
        'WSAL_AS_Filters_PostStatusFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/PostStatusFilter.php',
        'WSAL_AS_Filters_PostStatusWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/PostStatusWidget.php',
        'WSAL_AS_Filters_PostTypeFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/PostTypeFilter.php',
        'WSAL_AS_Filters_PostTypeWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/PostTypeWidget.php',
        'WSAL_AS_Filters_SingleSelectWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/SingleSelectWidget.php',
        'WSAL_AS_Filters_SingleSelectWidgetGroup' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/SingleSelectWidget.php',
        'WSAL_AS_Filters_SiteFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/SiteFilter.php',
        'WSAL_AS_Filters_SiteWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/SiteWidget.php',
        'WSAL_AS_Filters_UserFirstNameFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/UserFirstNameFilter.php',
        'WSAL_AS_Filters_UserFirstNameWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/UserFirstNameWidget.php',
        'WSAL_AS_Filters_UserLastNameFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/UserLastNameFilter.php',
        'WSAL_AS_Filters_UserLastNameWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/UserLastNameWidget.php',
        'WSAL_AS_Filters_UserNameFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/UserNameFilter.php',
        'WSAL_AS_Filters_UserNameWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/UserNameWidget.php',
        'WSAL_AS_Filters_UserRoleFilter' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/UserRoleFilter.php',
        'WSAL_AS_Filters_UserRoleWidget' => __DIR__ . '/../..' . '/extensions/search/classes/Filters/UserRoleWidget.php',
        'WSAL_AbstractExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/AbstractExtension.php',
        'WSAL_AbstractLogger' => __DIR__ . '/../..' . '/classes/AbstractLogger.php',
        'WSAL_AbstractMetaDataSensor' => __DIR__ . '/../..' . '/classes/AbstractMetaDataSensor.php',
        'WSAL_AbstractSensor' => __DIR__ . '/../..' . '/classes/AbstractSensor.php',
        'WSAL_AbstractView' => __DIR__ . '/../..' . '/classes/AbstractView.php',
        'WSAL_Adapters_ActiveRecordInterface' => __DIR__ . '/../..' . '/classes/Adapters/ActiveRecordInterface.php',
        'WSAL_Adapters_MetaInterface' => __DIR__ . '/../..' . '/classes/Adapters/MetaInterface.php',
        'WSAL_Adapters_OccurrenceInterface' => __DIR__ . '/../..' . '/classes/Adapters/OccurrenceInterface.php',
        'WSAL_Adapters_QueryInterface' => __DIR__ . '/../..' . '/classes/Adapters/QueryInterface.php',
        'WSAL_Alert' => __DIR__ . '/../..' . '/classes/Alert.php',
        'WSAL_AlertFormatter' => __DIR__ . '/../..' . '/classes/AlertFormatter.php',
        'WSAL_AlertFormatterConfiguration' => __DIR__ . '/../..' . '/classes/AlertFormatterConfiguration.php',
        'WSAL_AlertFormatterFactory' => __DIR__ . '/../..' . '/classes/AlertFormatterFactory.php',
        'WSAL_AlertManager' => __DIR__ . '/../..' . '/classes/AlertManager.php',
        'WSAL_AuditLogGridView' => __DIR__ . '/../..' . '/classes/AuditLogGridView.php',
        'WSAL_AuditLogListView' => __DIR__ . '/../..' . '/classes/AuditLogListView.php',
        'WSAL_BBPressExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/BBPressExtension.php',
        'WSAL_Connector_AbstractConnector' => __DIR__ . '/../..' . '/classes/Connector/AbstractConnector.php',
        'WSAL_Connector_ConnectorFactory' => __DIR__ . '/../..' . '/classes/Connector/ConnectorFactory.php',
        'WSAL_Connector_ConnectorInterface' => __DIR__ . '/../..' . '/classes/Connector/ConnectorInterface.php',
        'WSAL_Connector_MySQLDB' => __DIR__ . '/../..' . '/classes/Connector/MySQLDB.php',
        'WSAL_ConstantManager' => __DIR__ . '/../..' . '/classes/ConstantManager.php',
        'WSAL_Ext_AbstractConnection' => __DIR__ . '/../..' . '/extensions/external-db/classes/AbstractConnection.php',
        'WSAL_Ext_Ajax' => __DIR__ . '/../..' . '/extensions/external-db/classes/Ajax.php',
        'WSAL_Ext_Common' => __DIR__ . '/../..' . '/extensions/external-db/classes/Common.php',
        'WSAL_Ext_ConnectionInterface' => __DIR__ . '/../..' . '/extensions/external-db/classes/ConnectionInterface.php',
        'WSAL_Ext_Connections' => __DIR__ . '/../..' . '/extensions/external-db/classes/Connections.php',
        'WSAL_Ext_DataMigration' => __DIR__ . '/../..' . '/extensions/external-db/classes/DataMigration.php',
        'WSAL_Ext_ExternalStorageTab' => __DIR__ . '/../..' . '/extensions/external-db/classes/ExternalStorageTab.php',
        'WSAL_Ext_MetadataTimestampProcessor' => __DIR__ . '/../..' . '/extensions/external-db/classes/MetadataTimestampProcessor.php',
        'WSAL_Ext_MigrationCancellation' => __DIR__ . '/../..' . '/extensions/external-db/classes/MigrationCancellation.php',
        'WSAL_Ext_MirrorLogger' => __DIR__ . '/../..' . '/extensions/external-db/classes/MirrorLogger.php',
        'WSAL_Ext_Mirroring' => __DIR__ . '/../..' . '/extensions/external-db/classes/Mirroring.php',
        'WSAL_Ext_MonologHelper' => __DIR__ . '/../..' . '/extensions/external-db/classes/MonologHelper.php',
        'WSAL_Ext_Plugin' => __DIR__ . '/../..' . '/extensions/external-db/external-db-init.php',
        'WSAL_Ext_Settings' => __DIR__ . '/../..' . '/extensions/external-db/classes/Settings.php',
        'WSAL_Ext_StorageSwitch' => __DIR__ . '/../..' . '/extensions/external-db/classes/StorageSwitch.php',
        'WSAL_Ext_StorageSwitchToExternal' => __DIR__ . '/../..' . '/extensions/external-db/classes/StorageSwitchToExternal.php',
        'WSAL_Ext_StorageSwitchToLocal' => __DIR__ . '/../..' . '/extensions/external-db/classes/StorageSwitchToLocal.php',
        'WSAL_ExtensionPlaceholderView' => __DIR__ . '/../..' . '/classes/ExtensionPlaceholderView.php',
        'WSAL_Extension_Manager' => __DIR__ . '/../..' . '/extensions/class-wsal-extension-manager.php',
        'WSAL_GravityFormsExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/GravityFormsExtension.php',
        'WSAL_Helpers_Assets' => __DIR__ . '/../..' . '/classes/Helpers/Assets.php',
        'WSAL_Helpers_DataHelper' => __DIR__ . '/../..' . '/classes/Helpers/DataHelper.php',
        'WSAL_LogsManagement' => __DIR__ . '/../..' . '/extensions/logs-management/logs-management.php',
        'WSAL_MainWpApi' => __DIR__ . '/../..' . '/classes/MainWpApi.php',
        'WSAL_MemberPressExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/MemberPressExtension.php',
        'WSAL_Models_ActiveRecord' => __DIR__ . '/../..' . '/classes/Models/ActiveRecord.php',
        'WSAL_Models_Meta' => __DIR__ . '/../..' . '/classes/Models/Meta.php',
        'WSAL_Models_Occurrence' => __DIR__ . '/../..' . '/classes/Models/Occurrence.php',
        'WSAL_Models_OccurrenceQuery' => __DIR__ . '/../..' . '/classes/Models/OccurrenceQuery.php',
        'WSAL_Models_Query' => __DIR__ . '/../..' . '/classes/Models/Query.php',
        'WSAL_Models_TmpUser' => __DIR__ . '/../..' . '/classes/Models/TmpUser.php',
        'WSAL_NP_AddNotification' => __DIR__ . '/../..' . '/extensions/email-notifications/classes/AddNotification.php',
        'WSAL_NP_Common' => __DIR__ . '/../..' . '/extensions/email-notifications/classes/Common.php',
        'WSAL_NP_DailyNotification' => __DIR__ . '/../..' . '/extensions/email-notifications/classes/DailyNotification.php',
        'WSAL_NP_EditNotification' => __DIR__ . '/../..' . '/extensions/email-notifications/classes/EditNotification.php',
        'WSAL_NP_Expression' => __DIR__ . '/../..' . '/extensions/email-notifications/classes/Expression.php',
        'WSAL_NP_NotificationBuilder' => __DIR__ . '/../..' . '/extensions/email-notifications/classes/NotificationBuilder.php',
        'WSAL_NP_Notifications' => __DIR__ . '/../..' . '/extensions/email-notifications/classes/Notifications.php',
        'WSAL_NP_Notifier' => __DIR__ . '/../..' . '/extensions/email-notifications/classes/Notifier.php',
        'WSAL_NP_Plugin' => __DIR__ . '/../..' . '/extensions/email-notifications/email-notifications.php',
        'WSAL_NP_SMSProviderSettings' => __DIR__ . '/../..' . '/extensions/email-notifications/classes/SMSProviderSettings.php',
        'WSAL_Nicer' => __DIR__ . '/../..' . '/classes/Nicer.php',
        'WSAL_PluginInstallAndActivate' => __DIR__ . '/../..' . '/classes/Utilities/PluginInstallAndActivate.php',
        'WSAL_PluginInstallerAction' => __DIR__ . '/../..' . '/classes/Utilities/PluginInstallerAction.php',
        'WSAL_Ref' => __DIR__ . '/../..' . '/classes/Ref.php',
        'WSAL_Rep_AbstractReportGenerator' => __DIR__ . '/../..' . '/extensions/reports/classes/AbstractReportGenerator.php',
        'WSAL_Rep_Common' => __DIR__ . '/../..' . '/extensions/reports/classes/Common.php',
        'WSAL_Rep_CsvReportGenerator' => __DIR__ . '/../..' . '/extensions/reports/classes/CsvReportGenerator.php',
        'WSAL_Rep_DataFormat' => __DIR__ . '/../..' . '/extensions/reports/classes/DataFormat.php',
        'WSAL_Rep_HtmlReportGenerator' => __DIR__ . '/../..' . '/extensions/reports/classes/HtmlReportGenerator.php',
        'WSAL_Rep_JsonReportGenerator' => __DIR__ . '/../..' . '/extensions/reports/classes/JsonReportGenerator.php',
        'WSAL_Rep_PdfReportGenerator' => __DIR__ . '/../..' . '/extensions/reports/classes/PdfReportGenerator.php',
        'WSAL_Rep_Plugin' => __DIR__ . '/../..' . '/extensions/reports/reports-init.php',
        'WSAL_Rep_Report' => __DIR__ . '/../..' . '/extensions/reports/classes/Report.php',
        'WSAL_Rep_ReportGeneratorInterface' => __DIR__ . '/../..' . '/extensions/reports/classes/ReportGeneratorInterface.php',
        'WSAL_Rep_Settings' => __DIR__ . '/../..' . '/extensions/reports/classes/Settings.php',
        'WSAL_Rep_Views_Main' => __DIR__ . '/../..' . '/extensions/reports/classes/Views/Main.php',
        'WSAL_Rep_WhiteLabellingSettings' => __DIR__ . '/../..' . '/extensions/reports/classes/WhiteLabellingSettings.php',
        'WSAL_ReportArgs' => __DIR__ . '/../..' . '/classes/ReportArgs.php',
        'WSAL_SearchExtension' => __DIR__ . '/../..' . '/extensions/search/search-init.php',
        'WSAL_SensorManager' => __DIR__ . '/../..' . '/classes/SensorManager.php',
        'WSAL_Sensors_ACFMeta' => __DIR__ . '/../..' . '/classes/Sensors/ACFMeta.php',
        'WSAL_Sensors_Comments' => __DIR__ . '/../..' . '/classes/Sensors/Comments.php',
        'WSAL_Sensors_Content' => __DIR__ . '/../..' . '/classes/Sensors/Content.php',
        'WSAL_Sensors_Database' => __DIR__ . '/../..' . '/classes/Sensors/Database.php',
        'WSAL_Sensors_Files' => __DIR__ . '/../..' . '/classes/Sensors/Files.php',
        'WSAL_Sensors_LogInOut' => __DIR__ . '/../..' . '/classes/Sensors/LogInOut.php',
        'WSAL_Sensors_MainWP' => __DIR__ . '/../..' . '/classes/Sensors/MainWP.php',
        'WSAL_Sensors_Menus' => __DIR__ . '/../..' . '/classes/Sensors/Menus.php',
        'WSAL_Sensors_MetaData' => __DIR__ . '/../..' . '/classes/Sensors/MetaData.php',
        'WSAL_Sensors_Multisite' => __DIR__ . '/../..' . '/classes/Sensors/Multisite.php',
        'WSAL_Sensors_MultisiteSignUp' => __DIR__ . '/../..' . '/classes/Sensors/MultisiteSignUp.php',
        'WSAL_Sensors_PluginsThemes' => __DIR__ . '/../..' . '/classes/Sensors/PluginsThemes.php',
        'WSAL_Sensors_Register' => __DIR__ . '/../..' . '/classes/Sensors/Register.php',
        'WSAL_Sensors_Request' => __DIR__ . '/../..' . '/classes/Sensors/Request.php',
        'WSAL_Sensors_System' => __DIR__ . '/../..' . '/classes/Sensors/System.php',
        'WSAL_Sensors_UserProfile' => __DIR__ . '/../..' . '/classes/Sensors/UserProfile.php',
        'WSAL_Sensors_Widgets' => __DIR__ . '/../..' . '/classes/Sensors/Widgets.php',
        'WSAL_Settings' => __DIR__ . '/../..' . '/classes/Settings.php',
        'WSAL_SettingsExporter' => __DIR__ . '/../..' . '/extensions/settings-import-export/settings-import-export.php',
        'WSAL_TablePressExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/TablePressExtension.php',
        'WSAL_Uninstall' => __DIR__ . '/../..' . '/classes/Uninstall.php',
        'WSAL_UserSessions_Plugin' => __DIR__ . '/../..' . '/extensions/user-sessions/user-sessions.php',
        'WSAL_UserSessions_View_Options' => __DIR__ . '/../..' . '/extensions/user-sessions/classes/View/Options.php',
        'WSAL_UserSessions_View_Policies' => __DIR__ . '/../..' . '/extensions/user-sessions/classes/View/Options/Policies.php',
        'WSAL_UserSessions_View_Sessions' => __DIR__ . '/../..' . '/extensions/user-sessions/classes/View/Sessions.php',
        'WSAL_UserSessions_View_Settings' => __DIR__ . '/../..' . '/extensions/user-sessions/classes/View/Settings.php',
        'WSAL_UserSessions_Views' => __DIR__ . '/../..' . '/extensions/user-sessions/classes/Views.php',
        'WSAL_Utilities_DateTimeFormatter' => __DIR__ . '/../..' . '/classes/Utilities/DateTimeFormatter.php',
        'WSAL_Utilities_Emailer' => __DIR__ . '/../..' . '/classes/Utilities/Emailer.php',
        'WSAL_Utilities_FileSystemUtils' => __DIR__ . '/../..' . '/classes/Utilities/FileSystemUtils.php',
        'WSAL_Utilities_RequestUtils' => __DIR__ . '/../..' . '/classes/Utilities/RequestUtils.php',
        'WSAL_Utilities_UsersUtils' => __DIR__ . '/../..' . '/classes/Utilities/UserUtils.php',
        'WSAL_ViewManager' => __DIR__ . '/../..' . '/classes/ViewManager.php',
        'WSAL_Views_AuditLog' => __DIR__ . '/../..' . '/classes/Views/AuditLog.php',
        'WSAL_Views_EmailNotifications' => __DIR__ . '/../..' . '/classes/Views/EmailNotifications.php',
        'WSAL_Views_ExternalDB' => __DIR__ . '/../..' . '/classes/Views/ExternalDB.php',
        'WSAL_Views_Help' => __DIR__ . '/../..' . '/classes/Views/Help.php',
        'WSAL_Views_LogInUsers' => __DIR__ . '/../..' . '/classes/Views/LogInUsers.php',
        'WSAL_Views_Reports' => __DIR__ . '/../..' . '/classes/Views/Reports.php',
        'WSAL_Views_Search' => __DIR__ . '/../..' . '/classes/Views/Search.php',
        'WSAL_Views_Settings' => __DIR__ . '/../..' . '/classes/Views/Settings.php',
        'WSAL_Views_SetupWizard' => __DIR__ . '/../..' . '/classes/Views/SetupWizard.php',
        'WSAL_Views_ToggleAlerts' => __DIR__ . '/../..' . '/classes/Views/ToggleAlerts.php',
        'WSAL_WFCMExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/WFCMExtension.php',
        'WSAL_WPFormsExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/WPFormsExtension.php',
        'WSAL_WidgetManager' => __DIR__ . '/../..' . '/classes/WidgetManager.php',
        'WSAL_WooCommerceExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/WooCommerceExtension.php',
        'WSAL_YoastSeoExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/YoastSeoExtension.php',
        'wpdbCustom' => __DIR__ . '/../..' . '/classes/Connector/wp-db-custom.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5213b908ecf1568a565bc3d22aa5177::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5213b908ecf1568a565bc3d22aa5177::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5213b908ecf1568a565bc3d22aa5177::$classMap;

        }, null, ClassLoader::class);
    }
}
