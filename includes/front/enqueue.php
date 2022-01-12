<?php

$uri = get_theme_file_uri();
$ver = JU_DEV_MODE ? time() : false;

wp_register_style('rt_googlestyle', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i');
wp_register_style('ju_bootstrap', $uri . '/assets/css/bootstrap.css', [], $ver);
wp_register_style('ju_style', $uri . '/assets/css/style.css', [], $ver);
wp_register_style('ju_dark', $uri . '/assets/css/dark.css', [], $ver);
wp_register_style('ju_font_icons', $uri . '/assets/css/font-icons.css', [], $ver);
wp_register_style('ju_animate', $uri . '/assets/css/animate.css', [], $ver);
wp_register_style('ju_magnific_popup', $uri . '/assets/css/magnific-popup.css', [], $ver);
wp_register_style('ju_responsive', $uri . '/assets/css/responsive.css', [], $ver);
wp_register_style('ju_custom', $uri . '/assets/css/custom.css', [], $ver);