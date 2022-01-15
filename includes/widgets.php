<?php

function ju_setup_sidebar()
{
    register_sidebar(array(
        'name' => __('Main Theme Sidebar', 'udemy'),
        'id' => 'ju_sidebar-1',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'udemy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}