<?php
//setup

//includes
include get_theme_file_path('includes/front/enqueue.php');
//hooks
add_action('wp_enqueue_scripts', 'rt_enqueue');
//shortcodes