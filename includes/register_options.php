<?php


function my_plugin_register_single_option()
{
    // Register a single setting
    register_setting('my_dark_mode_options_group', 'dark_mode_colors_option');
}
function my_dark_mode_settings_init()
{
    // Register a single option to store the settings as an array
    register_setting('my_dark_mode_settings_group', 'dark_mode_button_settings');
}
add_action('admin_init', 'my_plugin_register_single_option');
add_action('admin_init', 'my_dark_mode_settings_init');
