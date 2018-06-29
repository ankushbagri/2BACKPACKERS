<?php
/*
 * Main Sidebar
 */
function nikosa_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Main Sidebar', 'nikosa'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Main sidebar that appears on the right.', 'nikosa'),
        'before_widget' => '<aside id="%1$s" class="side-area-post %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'nikosa_widgets_init');