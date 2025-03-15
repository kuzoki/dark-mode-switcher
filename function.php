<?php

/**
 * Plugin Name: Dark Mode Switcher
 * Plugin URI: https://example.com
 * Description: A plugin to toggle between dark and light modes for your WordPress site.
 * Version: 1.0.0
 * Author: Abderrahmane Bamoussa
 * Author URI: https://github.com/kuzoki
 * License: GPL2

 */

//Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

define('MY_PLUGIN_URL', plugin_dir_url(__FILE__));


// Include necessary files
include_once(plugin_dir_path(__FILE__) . 'includes/admin_page.php');
include_once(plugin_dir_path(__FILE__) . 'includes/enqueue_scripts.php');
include_once(plugin_dir_path(__FILE__) . 'includes/register_options.php');
include_once(plugin_dir_path(__FILE__) . 'includes/short_codes.php');
include_once(plugin_dir_path(__FILE__) . 'includes/inject_script_to_front_end.php');
