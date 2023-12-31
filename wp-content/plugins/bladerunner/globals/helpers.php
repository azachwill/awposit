<?php
/**
 * Global functions
 */

if (!function_exists('bladerunner')) {
    function bladerunner($view, $data = [], $echo=true)
    {
        $result = view($view, $data);
        if ($echo) {
            echo $result;
            return null;
        }
        return $result;
    }
}

if (!function_exists('view')) {
    function view($view, $data = [])
    {
        return \Bladerunner\Container::current('blade')->render($view, $data);
    }
}

if (! function_exists('asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string $path
     * @return string
     */
    function asset($path)
    {
        return get_template_directory_uri() . '/dist/' . $path;
    }
}
