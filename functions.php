<?php
//setup
define('JU_DEV_MODE', true);
//includes
include get_theme_file_path('includes/front/enqueue.php');
include get_theme_file_path('includes/setup.php');
//hooks
add_action('wp_enqueue_scripts', 'rt_enqueue');
add_action('after_setup_theme', 'ju_setup_theme');
//shortcodes