<?php
function astra_child_enqueue_styles() {
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('astra-child-style', get_stylesheet_uri(), array('astra-parent-style'), '1.0');
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');

// 5 ACTION HOOKS
function astra_child_theme_setup() {
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'astra_child_theme_setup');

function astra_child_init_hook() {}
add_action('init', 'astra_child_init_hook');

function astra_child_footer_credit() {
    echo '<!-- Custom Footer - Phase 1 Project -->';
}
add_action('wp_footer', 'astra_child_footer_credit');

function astra_child_head_meta() {
    echo '<meta name="author" content="Phase 1 Student">';
}
add_action('wp_head', 'astra_child_head_meta');

function astra_child_admin_notice() {
    echo '<div class="notice notice-success is-dismissible"><p>Astra Child Theme Active - Phase 1</p></div>';
}
add_action('admin_notices', 'astra_child_admin_notice');

// 3 FILTER HOOKS
function astra_child_excerpt_length($length) { return 30; }
add_filter('excerpt_length', 'astra_child_excerpt_length');

function astra_child_content_filter($content) {
    if (is_single()) {
        $content .= '<p><em>Thanks for reading - Phase 1 Project</em></p>';
    }
    return $content;
}
add_filter('the_content', 'astra_child_content_filter');

function astra_child_login_logo_url($url) { return home_url(); }
add_filter('login_headerurl', 'astra_child_login_logo_url');

// CUSTOM ROLE
function astra_child_custom_user_role() {
    if (!get_role('content_manager')) {
        add_role('content_manager', 'Content Manager', array(
            'read' => true,
            'edit_posts' => true,
            'publish_posts' => true,
            'edit_published_posts' => true,
            'delete_posts' => true,
            'upload_files' => true,
        ));
    }
}
add_action('init', 'astra_child_custom_user_role');