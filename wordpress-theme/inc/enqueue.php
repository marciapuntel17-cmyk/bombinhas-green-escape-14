<?php
/**
 * Enqueue Scripts and Styles
 * 
 * @package PousadaBombinhas
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue theme styles and scripts
 */
function pousada_scripts() {
    // Theme stylesheet
    wp_enqueue_style('pousada-style', get_stylesheet_uri(), array(), POUSADA_THEME_VERSION);
    
    // Google Fonts
    wp_enqueue_style('pousada-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap', array(), null);
    
    // Theme JavaScript
    wp_enqueue_script('pousada-main', get_template_directory_uri() . '/js/main.js', array(), POUSADA_THEME_VERSION, true);
    
    // Localize script with theme data
    wp_localize_script('pousada-main', 'pousadaData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('pousada_nonce'),
        'whatsappNumber' => get_theme_mod('whatsapp_number', '48999999999'),
        'strings' => array(
            'loading' => __('Loading...', 'pousada-bombinhas'),
            'error' => __('An error occurred. Please try again.', 'pousada-bombinhas'),
            'success' => __('Success!', 'pousada-bombinhas'),
        )
    ));
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'pousada_scripts');

/**
 * Enqueue admin styles and scripts
 */
function pousada_admin_scripts($hook) {
    // Only load on customizer and post edit pages
    if ($hook !== 'customize.php' && $hook !== 'post.php' && $hook !== 'post-new.php') {
        return;
    }
    
    wp_enqueue_style('pousada-admin', get_template_directory_uri() . '/css/admin.css', array(), POUSADA_THEME_VERSION);
    wp_enqueue_script('pousada-admin', get_template_directory_uri() . '/js/admin.js', array('jquery'), POUSADA_THEME_VERSION, true);
}
add_action('admin_enqueue_scripts', 'pousada_admin_scripts');

/**
 * Add async/defer attributes to scripts
 */
function pousada_script_loader_tag($tag, $handle, $src) {
    // Scripts to load asynchronously
    $async_scripts = array('pousada-main');
    
    if (in_array($handle, $async_scripts)) {
        return str_replace('<script ', '<script async ', $tag);
    }
    
    return $tag;
}
add_filter('script_loader_tag', 'pousada_script_loader_tag', 10, 3);

/**
 * Optimize CSS delivery
 */
function pousada_optimize_css() {
    // Add critical CSS inline for above-the-fold content
    ?>
    <style id="pousada-critical-css">
        /* Critical CSS for above-the-fold content */
        .site-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: rgba(254, 252, 249, 0.95);
            backdrop-filter: blur(12px);
        }
        
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
        }
        
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(44, 85, 48, 0.9), rgba(37, 99, 235, 0.8));
        }
        
        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
        }
    </style>
    <?php
}
add_action('wp_head', 'pousada_optimize_css', 1);

/**
 * Preload critical resources
 */
function pousada_preload_resources() {
    // Preload critical CSS
    echo '<link rel="preload" href="' . get_stylesheet_uri() . '" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
    
    // Preload critical JavaScript
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/js/main.js" as="script">';
    
    // Preload fonts
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
}
add_action('wp_head', 'pousada_preload_resources', 1);

/**
 * Remove unused WordPress assets
 */
function pousada_cleanup_assets() {
    // Remove emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    
    // Remove block editor styles on frontend if not needed
    if (!is_admin()) {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('global-styles');
    }
}
add_action('init', 'pousada_cleanup_assets');

/**
 * Add viewport meta tag for mobile responsiveness
 */
function pousada_viewport_meta() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">';
}
add_action('wp_head', 'pousada_viewport_meta', 1);