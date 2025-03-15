<?php

// Inject dark mode style
// Hook into wp_head to output custom styles for dark mode
add_action('wp_head', 'inject_dark_mode_styles');
function inject_dark_mode_styles()
{
    // Retrieve dark mode colors saved in the database
    $dark_mode_colors = get_option('dark_mode_colors_option', []);

    // Check if there are any colors saved for dark mode
    if (empty($dark_mode_colors)) {
        return;
    }

    // Fetch the Elementor Kit ID (adjust based on your setup)
    $elementor_instance = \Elementor\Plugin::$instance->kits_manager->get_active_kit();
    $kit_id = $elementor_instance->get_id(); // Assuming the kit ID is fetched like this

    // Start generating CSS for the dark mode colors
    echo '<style id="dark-mode-custom-styles">';
    echo ".dark-mode-active.elementor-kit-{$kit_id} {";

    // Iterate over the dark mode colors and create CSS variables
    foreach ($dark_mode_colors as $color_id => $color_data) {
        // Ensure both color and title are available
        if (isset($color_data['color']) && isset($color_data['title'])) {
            $css_variable_name = '--e-global-color-' . sanitize_key($color_id); // Create a safe CSS variable name
            $css_color_value = esc_attr($color_data['color']); // Sanitize the color value
            echo "{$css_variable_name}: {$css_color_value};";
        }
    }

    // You can add additional styles if needed
    echo "background-color: black !important;"; // Example additional style

    echo '}';
    echo '</style>';
}
