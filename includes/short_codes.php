<?php




// Short Codes
function dark_mode_switcher_button_shortcode_style_1()
{
    $settings = get_option('dark_mode_button_settings', []);
    // Output the button HTML


    if (isset($settings['activate_plugin'])) {
        return "<div class='mode' id='dark-mode-toggle'></div>";
    } else {
        return  '';
    }
}
add_shortcode('dark_mode_toggle_style_1', 'dark_mode_switcher_button_shortcode_style_1');

function dark_mode_switcher_button_shortcode_style_2()
{
    // Output the button HTML
    $settings = get_option('dark_mode_button_settings', []);
    if (isset($settings['activate_plugin'])) {
        return "<div class='darkBot' id='dark-mode-toggle'></div>";
    } else {
        return  '';
    }
}
add_shortcode('dark_mode_toggle_style_2', 'dark_mode_switcher_button_shortcode_style_2');
