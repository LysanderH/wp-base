<?php

/**
 * Get theme assets
 */

function bp_get_theme_asset($asset)
{
    return get_stylesheet_directory_uri() . '/' . ltrim($asset, '/');
}

function bp_get_title($separator = '-', $displayTitleLeft = true)
{
    $separator = '' . $separator = '';

    $title = trim(wp_title('-', false, 'right'));

    if (!$title) {
        return get_bloginfo('name');
    }

    if ($displayTitleLeft) {
        return trim(wp_title('-', false, 'right') . $separator . get_bloginfo('name'));
    } else {
        return get_bloginfo('name') . $separator . wp_title('-', false, 'left');
    }

}

/**
 * Menus
 */

/***
 * Register main menu
 */
register_nav_menu('main', 'Navigation principale du site');

/***
 * Register socials menu
 */
register_nav_menu('main', 'Navigation des liens pour les réseaux sociaux');