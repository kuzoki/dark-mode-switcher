<?php
$dark_mode_colors_option = get_option('dark_mode_colors_option', []);

$elementor_instance = \Elementor\Plugin::$instance->kits_manager->get_active_kit();
$global_colors = $elementor_instance->get_settings('system_colors');
$custom_colors = $elementor_instance->get_settings('custom_colors');


?>
<hr>

<h1 class="">
    Colors Settings
</h1>

<div class="row ">
    <!-- First Column: Display Existing Elementor Global Colors -->
    <div class="col-6">
        <h3 class="" style="color:#54595F">Current Elementor Global Colors</h3>
        <!-- Explanation for Elementor Global Colors -->
        <p style="margin-bottom: 30px;">Below are the current global colors set in Elementor. These colors are used across your site for various elements.</p>
        <div class="color-list ">
            <?php
            // Display global and custom colors
            renderColorSpan($global_colors);
            renderColorSpan($custom_colors);
            ?>
        </div>
    </div>

    <!-- Second Column: Form for Setting Dark Mode Colors -->
    <div class="col-6">
        <h3 class="" style="color:#54595F">Set Colors for Dark Mode</h3>
        <!-- Explanation for Dark Mode Color Settings -->
        <p style="margin-bottom: 30px;">Assign a dark mode color for each element listed below. These colors will be applied when dark mode is enabled on your site.</p>

        <form method="post" action="options.php">
            <!-- Security fields for saving the options -->
            <div class="list-group ">
                <?php settings_fields('my_dark_mode_options_group'); ?>
                <?php do_settings_sections('my_dark_mode_options_group'); ?>

                <!-- Render inputs for dark mode colors (for global and custom colors) -->
                <?php render_dark_mode_input($global_colors, get_option('dark_mode_colors_option')); ?>
                <?php render_dark_mode_input($custom_colors, get_option('dark_mode_colors_option')); ?>

                <div class="submit-btn">
                    <input type="submit" class="btn btn-primary" value="Save Dark Mode Colors">
                </div>
            </div>
        </form>
    </div>
</div>


<?php

// Render List
function renderColorSpan($list)
{
    foreach ($list as $item):   ?>

        <div>
            <span class="color--card" style="background:<?= $item['color'] ?>"></span>
            <span><?= $item['title'] ?></span>
            - <span><?= $item['color'] ?></span>
        </div>

    <?php

    endforeach;
}



function render_dark_mode_input($colors, $dark_mode_colors_option)
{
    foreach ($colors as $index => $color):
        // Fetch existing values from the options if they exist, otherwise use default values
        $dark_color = isset($dark_mode_colors_option[$color["_id"]]['color']) ? $dark_mode_colors_option[$color["_id"]]['color'] : '';
        $saved_title = isset($dark_mode_colors_option[$color["_id"]]['title']) ? $dark_mode_colors_option[$color["_id"]]['title'] : $color["title"];
        $saved_id = isset($dark_mode_colors_option[$color["_id"]]['id']) ? $dark_mode_colors_option[$color["_id"]]['id'] : $color["_id"];

        // Display saved values for debugging (you can remove this echo after verifying)
    ?>
        <div class="list-group-item ">
            <!-- Label for the color input -->
            <label class="" for="dark_color_<?php echo esc_attr($index); ?>">
                <?php echo esc_html($color["title"]); ?> color:
            </label>

            <!-- Color input field with a color picker -->
            <input type="text" class="elementor-color-picker"
                name="dark_mode_colors_option[<?php echo esc_attr($color["_id"]); ?>][color]"
                id="dark_color_<?php echo esc_attr($index); ?>"
                value="<?php echo esc_attr($dark_color); ?>">

            <!-- Hidden inputs to store title and ID -->
            <input type="hidden"
                name="dark_mode_colors_option[<?php echo esc_attr($color["_id"]); ?>][title]"
                value="<?php echo esc_attr($saved_title); ?>">

            <input type="hidden"
                name="dark_mode_colors_option[<?php echo esc_attr($color["_id"]); ?>][id]"
                value="<?php echo esc_attr($saved_id); ?>">

        </div>

<?php
    endforeach;
}
