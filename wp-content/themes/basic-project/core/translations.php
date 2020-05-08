<?php
/**
 *
 */
function dp_register_theme_translations(){
    load_theme_textdomain('dp', get_template_directory(). '/languages');
}
add_action('after_setup_theme', 'dp_register_theme_translations');