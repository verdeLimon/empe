<?php

/**
 * Theme functions for meta
 */
function site_name() {
    return Config::app('sitename');
}

function site_description() {
    return Config::app('description');
}

//function site_meta($key, $default = '') {
//    return Config::meta('custom_' . $key, $default);
//}
