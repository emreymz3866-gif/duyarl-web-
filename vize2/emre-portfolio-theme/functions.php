<?php
function emre_portfolio_scripts() {
    // Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), null);
    
    // Theme CSS
    wp_enqueue_style('emre-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Theme JS
    wp_enqueue_script('emre-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'emre_portfolio_scripts');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
?>
