<?php

function dark_mode_switcher_menu()
{
    // Add the main menu page
    add_menu_page(
        'Dark Mode Switcher',      // Page title
        'Dark Mode',               // Menu title
        'manage_options',          // Capability
        'dark-mode-switcher',      // Menu slug
        'dark_mode_switcher_page', // Callback function to render content
        'dashicons-lightbulb',     // Menu icon
        80                         // Position in the menu
    );
    // Add a submenu under the main page

}

add_action('admin_menu', 'dark_mode_switcher_menu');



function dark_mode_switcher_page()
{
    // Use the correct path to include the template file
    $template_path = plugin_dir_path(__DIR__) . 'templates/dark_mode_switcher_page.php';

    if (file_exists($template_path)) {
        include_once($template_path);
    } else {
        echo '<div class="notice notice-error"><p>Template file not found.</p></div>';
    }
}
