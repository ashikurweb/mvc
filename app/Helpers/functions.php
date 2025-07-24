<?php 

use Core\Response;

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


