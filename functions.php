<?php
// Enqueue Styles
function portfolio_theme_assets() {
    wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() ); // Enqueue main stylesheet
}
add_action( 'wp_enqueue_scripts', 'portfolio_theme_assets' );

function portfolio_enqueue_fontawesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_fontawesome');


// Add theme support for WordPress features
function portfolio_theme_support() {
    add_theme_support( 'title-tag' ); // Let WordPress handle the title tag
    add_theme_support( 'post-thumbnails' ); // Enable featured images
    add_theme_support( 'custom-logo' ); // Enable custom logo support
}
add_action( 'after_setup_theme', 'portfolio_theme_support' );

// Register Navigation Menus
function portfolio_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'portfolio' ),
        'footer'  => __( 'Footer Menu', 'portfolio' ),
    ) );
}
add_action( 'init', 'portfolio_menus' );

function portfolio_customize_register($wp_customize) {
    $wp_customize->add_section('social_links_section', array(
        'title'    => __('Social Media Links', 'portfolio'),
        'priority' => 30,
    ));

    $socials = array(
        'instagram' => 'Instagram',
        'youtube'   => 'YouTube',
        'linkedin'  => 'LinkedIn',
    );

    foreach ($socials as $slug => $label) {
        $wp_customize->add_setting("{$slug}_link", array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("{$slug}_link", array(
            'label'    => __("{$label} URL", 'portfolio'),
            'section'  => 'social_links_section',
            'type'     => 'url',
        ));
    }
}
add_action('customize_register', 'portfolio_customize_register');


// Add a Custom Section for Social Links in Customizer
function portfolio_customize_section($wp_customize) {
    $wp_customize->add_section('social_media', array(
        'title' => __('Social Media Links', 'portfolio'),
        'priority' => 30,
    ));
}
add_action('customize_register', 'portfolio_customize_section');
?>
