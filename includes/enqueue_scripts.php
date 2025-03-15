<?php



// Admin style
function mw_enqueue_color_picker($hook_suffix)
{
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('my-script-handle', plugins_url('my-script.js', __DIR__), array('wp-color-picker'), false, true);
}


add_action('admin_enqueue_scripts', 'mw_enqueue_color_picker');



function enqueue_custom_plugin_admin_style()
{
    // Use plugin_dir_url to reference the CSS file inside your plugin
    wp_enqueue_style('__dark-mode-plugin-admin-style', plugin_dir_url(__DIR__) . 'assets/css/__dark-mode-admin-style.css');
}
add_action('admin_enqueue_scripts', 'enqueue_custom_plugin_admin_style');


// Front-end styles

function my_custom_styles()
{

    $settings = get_option('dark_mode_button_settings', []);




    // Enqueue the CSS file
    wp_enqueue_style('__dark-mode-front-end', plugin_dir_url(__DIR__) . 'assets/css/__dark-mode-front-end.css');

    // Enqueue the JS file
    wp_enqueue_script('__dark-mode-toggle-script', plugins_url('assets/js/__dark-mode-toggle.js', __DIR__), array('jquery'), null, true);

    // Localize the script with settings
    wp_localize_script('__dark-mode-toggle-script', 'mySettings', $settings);
}
add_action('wp_enqueue_scripts', 'my_custom_styles');
