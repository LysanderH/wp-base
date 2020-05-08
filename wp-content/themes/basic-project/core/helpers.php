<?php
/**
 * Generates a link to a theme asset
 *
 * @param string $asset
 * @return string
 *
 */
function bp_get_theme_asset($asset)
{
    return get_stylesheet_directory_uri() . '/' . ltrim($asset, '/');
}


/**
 * Generates a custom page title and heading
 *
 * @param string $separator
 * @param boolean $displayTitleLeft
 * @return string
 */
function bp_get_title($separator = '-', $displayTitleLeft = true)
{
    $title = trim(wp_title($separator, false, 'right'));

    if (!$title) {
        return get_bloginfo('name');
    }

    if ($displayTitleLeft) {
        return trim(wp_title($separator, false, 'right') . get_bloginfo('name'));
    } else {
        return get_bloginfo('name') . wp_title($separator, false, 'left');
    }
}
