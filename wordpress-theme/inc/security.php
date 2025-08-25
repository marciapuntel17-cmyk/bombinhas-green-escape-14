<?php
/**
 * Security Enhancements
 * 
 * @package PousadaBombinhas
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Remove WordPress version from head and feeds
 */
function pousada_remove_version() {
    return '';
}
add_filter('the_generator', 'pousada_remove_version');

/**
 * Hide login errors
 */
function pousada_hide_login_errors() {
    return __('Something is wrong!', 'pousada-bombinhas');
}
add_filter('login_errors', 'pousada_hide_login_errors');

/**
 * Disable file editing in admin
 */
if (!defined('DISALLOW_FILE_EDIT')) {
    define('DISALLOW_FILE_EDIT', true);
}

/**
 * Remove Really Simple Discovery (RSD) link
 */
remove_action('wp_head', 'rsd_link');

/**
 * Remove Windows Live Writer manifest link
 */
remove_action('wp_head', 'wlwmanifest_link');

/**
 * Remove shortlink
 */
remove_action('wp_head', 'wp_shortlink_wp_head');

/**
 * Remove adjacent posts links
 */
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);

/**
 * Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Remove XML-RPC pingback ping
 */
function pousada_remove_xmlrpc_pingback_ping($methods) {
    unset($methods['pingback.ping']);
    return $methods;
}
add_filter('xmlrpc_methods', 'pousada_remove_xmlrpc_pingback_ping');

/**
 * Disable pingbacks
 */
function pousada_disable_pingback(&$links) {
    foreach ($links as $l => $link) {
        if (0 === strpos($link, get_option('home'))) {
            unset($links[$l]);
        }
    }
}
add_action('pre_ping', 'pousada_disable_pingback');

/**
 * Remove query strings from static resources
 */
function pousada_remove_query_strings($src) {
    $parts = explode('?ver', $src);
    return $parts[0];
}
add_filter('script_loader_src', 'pousada_remove_query_strings', 15, 1);
add_filter('style_loader_src', 'pousada_remove_query_strings', 15, 1);

/**
 * Add security headers
 */
function pousada_security_headers() {
    // Prevent clickjacking
    header('X-Frame-Options: SAMEORIGIN');
    
    // Prevent MIME type sniffing
    header('X-Content-Type-Options: nosniff');
    
    // Enable XSS filtering
    header('X-XSS-Protection: 1; mode=block');
    
    // Referrer policy
    header('Referrer-Policy: strict-origin-when-cross-origin');
    
    // Content Security Policy (basic)
    $csp = "default-src 'self'; ";
    $csp .= "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://fonts.googleapis.com https://wa.me; ";
    $csp .= "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; ";
    $csp .= "font-src 'self' https://fonts.gstatic.com; ";
    $csp .= "img-src 'self' data: https:; ";
    $csp .= "connect-src 'self' https://wa.me;";
    
    header("Content-Security-Policy: $csp");
}
add_action('send_headers', 'pousada_security_headers');

/**
 * Limit login attempts (basic implementation)
 */
function pousada_limit_login_attempts() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $attempts = get_transient('login_attempts_' . $ip);
    
    if ($attempts && $attempts >= 5) {
        wp_die(__('Too many login attempts. Please try again later.', 'pousada-bombinhas'));
    }
}
add_action('wp_login_failed', 'pousada_record_login_attempt');

function pousada_record_login_attempt() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $attempts = get_transient('login_attempts_' . $ip);
    $attempts = $attempts ? $attempts + 1 : 1;
    
    set_transient('login_attempts_' . $ip, $attempts, 15 * MINUTE_IN_SECONDS);
}

/**
 * Remove WordPress version from CSS and JS
 */
function pousada_remove_version_from_assets($src) {
    if (strpos($src, 'ver=' . get_bloginfo('version'))) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'pousada_remove_version_from_assets', 9999);
add_filter('script_loader_src', 'pousada_remove_version_from_assets', 9999);

/**
 * Disable directory browsing
 */
function pousada_disable_directory_browsing() {
    $htaccess_file = ABSPATH . '.htaccess';
    $rules = "\n# Disable directory browsing\nOptions -Indexes\n";
    
    if (is_writable($htaccess_file)) {
        $current_rules = file_get_contents($htaccess_file);
        if (strpos($current_rules, 'Options -Indexes') === false) {
            file_put_contents($htaccess_file, $rules, FILE_APPEND | LOCK_EX);
        }
    }
}
add_action('admin_init', 'pousada_disable_directory_browsing');

/**
 * Sanitize uploaded file names
 */
function pousada_sanitize_uploaded_filename($filename) {
    // Remove special characters and spaces
    $filename = preg_replace('/[^A-Za-z0-9._-]/', '', $filename);
    
    // Convert to lowercase
    $filename = strtolower($filename);
    
    return $filename;
}
add_filter('sanitize_file_name', 'pousada_sanitize_uploaded_filename', 10, 1);

/**
 * Disable author enumeration
 */
function pousada_disable_author_enumeration() {
    if (is_author() || (isset($_GET['author']) && intval($_GET['author']))) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'pousada_disable_author_enumeration');