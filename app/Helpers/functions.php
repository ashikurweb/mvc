<?php 

/**
 * Dump and Die
 * @param mixed ...$values
 * @return void
 */

function dd ( ...$values ) 
{
    echo "<pre>";
    foreach ( $values as $value ) {
        var_dump($value);
    }
    echo "</pre>";
    die();
}

/**
 * Check if the current URL is the same as the given URL
 * @param string $url
 * @return bool
 */
function urlIs ( $url )
{
    return $_SERVER['REQUEST_URI'] == $url;
}

/**
 * Get the base path of the application
 * @param string $path
 * @return string
 */
function base_path ( $path )
{
    return BASE_PATH.$path;
}

/**
 * Redirect to a given path
 * @param string $path
 * @return void
 */
function redirect ( $path )
{
    header("Location: $path");
    exit();
}

/**
 * View a given path
 * @param string $name
 * @return void
 */
function view($name)
{
    require base_path("resources/views/{$name}.php");
}

if (!function_exists('view')) {
    function view($name)
    {
        require base_path("resources/views/{$name}.php");
    }
}