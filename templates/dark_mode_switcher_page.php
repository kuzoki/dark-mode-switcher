<?php


?>
<div class="dark-switcher-body container-xxl ">

    <h1 class="display-4 mb-4">
        Elementor Dark Mode Switcher
    </h1>
    <?php include_once(plugin_dir_path(__DIR__) . 'components/switcher_global_settings.php'); ?>
    <?php include_once(plugin_dir_path(__DIR__) . 'components/switcher_colors.php'); ?>
    <?php include_once(plugin_dir_path(__DIR__) . 'components/switcher_buttons.php'); ?>
</div>


<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.elementor-color-picker').wpColorPicker();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>