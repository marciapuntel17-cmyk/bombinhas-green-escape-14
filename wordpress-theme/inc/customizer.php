<?php
/**
 * Theme Customizer
 * 
 * @package PousadaBombinhas
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add customizer settings
 */
function pousada_customize_register($wp_customize) {
    
    // Hero Section
    $wp_customize->add_section('pousada_hero', array(
        'title' => __('Hero Section', 'pousada-bombinhas'),
        'priority' => 30,
    ));
    
    // Hero Background Image
    $wp_customize->add_setting('hero_background_image', array(
        'default' => get_template_directory_uri() . '/images/hero-pousada.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label' => __('Hero Background Image', 'pousada-bombinhas'),
        'section' => 'pousada_hero',
        'settings' => 'hero_background_image',
    )));
    
    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Pousada Praia de Bombinhas',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'pousada-bombinhas'),
        'section' => 'pousada_hero',
        'type' => 'text',
    ));
    
    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'Seu refúgio na natureza exuberante da Mata Atlântica',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'pousada-bombinhas'),
        'section' => 'pousada_hero',
        'type' => 'textarea',
    ));
    
    // Hero Accent Text
    $wp_customize->add_setting('hero_accent', array(
        'default' => 'Natureza & Tranquilidade',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_accent', array(
        'label' => __('Hero Accent Text', 'pousada-bombinhas'),
        'section' => 'pousada_hero',
        'type' => 'text',
    ));
    
    // About Section
    $wp_customize->add_section('pousada_about', array(
        'title' => __('About Section', 'pousada-bombinhas'),
        'priority' => 35,
    ));
    
    // About Title
    $wp_customize->add_setting('about_title', array(
        'default' => 'Sobre Nossa Pousada',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('about_title', array(
        'label' => __('About Title', 'pousada-bombinhas'),
        'section' => 'pousada_about',
        'type' => 'text',
    ));
    
    // About Description
    $wp_customize->add_setting('about_description', array(
        'default' => 'Localizada no coração de Bombinhas, nossa pousada oferece a combinação perfeita entre conforto e natureza.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('about_description', array(
        'label' => __('About Description', 'pousada-bombinhas'),
        'section' => 'pousada_about',
        'type' => 'textarea',
    ));
    
    // Contact Section
    $wp_customize->add_section('pousada_contact', array(
        'title' => __('Contact Information', 'pousada-bombinhas'),
        'priority' => 40,
    ));
    
    // Phone
    $wp_customize->add_setting('contact_phone', array(
        'default' => '(48) 99999-9999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label' => __('Phone Number', 'pousada-bombinhas'),
        'section' => 'pousada_contact',
        'type' => 'text',
    ));
    
    // Email
    $wp_customize->add_setting('contact_email', array(
        'default' => 'contato@pousadabombinhas.com.br',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label' => __('Email Address', 'pousada-bombinhas'),
        'section' => 'pousada_contact',
        'type' => 'email',
    ));
    
    // WhatsApp Number
    $wp_customize->add_setting('whatsapp_number', array(
        'default' => '48999999999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('whatsapp_number', array(
        'label' => __('WhatsApp Number (digits only)', 'pousada-bombinhas'),
        'section' => 'pousada_contact',
        'type' => 'text',
        'description' => __('Enter only digits, e.g., 48999999999', 'pousada-bombinhas'),
    ));
    
    // Address
    $wp_customize->add_setting('address_line1', array(
        'default' => 'Rua das Garoupas, 123',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('address_line1', array(
        'label' => __('Address Line 1', 'pousada-bombinhas'),
        'section' => 'pousada_contact',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('address_line2', array(
        'default' => 'Centro - Bombinhas, SC',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('address_line2', array(
        'label' => __('Address Line 2', 'pousada-bombinhas'),
        'section' => 'pousada_contact',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('address_cep', array(
        'default' => 'CEP: 88215-000',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('address_cep', array(
        'label' => __('CEP', 'pousada-bombinhas'),
        'section' => 'pousada_contact',
        'type' => 'text',
    ));
    
    // Location Coordinates
    $wp_customize->add_setting('location_lat', array(
        'default' => '-27.1394',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('location_lat', array(
        'label' => __('Latitude', 'pousada-bombinhas'),
        'section' => 'pousada_contact',
        'type' => 'text',
        'description' => __('For Google Maps integration', 'pousada-bombinhas'),
    ));
    
    $wp_customize->add_setting('location_lng', array(
        'default' => '-48.4816',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('location_lng', array(
        'label' => __('Longitude', 'pousada-bombinhas'),
        'section' => 'pousada_contact',
        'type' => 'text',
    ));
    
    // Social Media Section
    $wp_customize->add_section('pousada_social', array(
        'title' => __('Social Media', 'pousada-bombinhas'),
        'priority' => 45,
    ));
    
    // Instagram
    $wp_customize->add_setting('social_instagram', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('social_instagram', array(
        'label' => __('Instagram URL', 'pousada-bombinhas'),
        'section' => 'pousada_social',
        'type' => 'url',
    ));
    
    // Facebook
    $wp_customize->add_setting('social_facebook', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('social_facebook', array(
        'label' => __('Facebook URL', 'pousada-bombinhas'),
        'section' => 'pousada_social',
        'type' => 'url',
    ));
    
    // TripAdvisor
    $wp_customize->add_setting('social_tripadvisor', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('social_tripadvisor', array(
        'label' => __('TripAdvisor URL', 'pousada-bombinhas'),
        'section' => 'pousada_social',
        'type' => 'url',
    ));
    
    // Colors Section
    $wp_customize->add_section('pousada_colors', array(
        'title' => __('Theme Colors', 'pousada-bombinhas'),
        'priority' => 50,
    ));
    
    // Primary Color
    $wp_customize->add_setting('primary_color', array(
        'default' => '#2c5530',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('Primary Color', 'pousada-bombinhas'),
        'section' => 'pousada_colors',
        'settings' => 'primary_color',
    )));
    
    // Secondary Color
    $wp_customize->add_setting('secondary_color', array(
        'default' => '#2563eb',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label' => __('Secondary Color', 'pousada-bombinhas'),
        'section' => 'pousada_colors',
        'settings' => 'secondary_color',
    )));
    
    // Accent Color
    $wp_customize->add_setting('accent_color', array(
        'default' => '#84cc16',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'accent_color', array(
        'label' => __('Accent Color', 'pousada-bombinhas'),
        'section' => 'pousada_colors',
        'settings' => 'accent_color',
    )));
    
    // Services Section
    $wp_customize->add_section('pousada_services', array(
        'title' => __('Services & Amenities', 'pousada-bombinhas'),
        'priority' => 55,
    ));
    
    // Enable Services Section
    $wp_customize->add_setting('show_services_section', array(
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    
    $wp_customize->add_control('show_services_section', array(
        'label' => __('Show Services Section', 'pousada-bombinhas'),
        'section' => 'pousada_services',
        'type' => 'checkbox',
    ));
    
    // Services Title
    $wp_customize->add_setting('services_title', array(
        'default' => 'Nossos Serviços',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('services_title', array(
        'label' => __('Services Section Title', 'pousada-bombinhas'),
        'section' => 'pousada_services',
        'type' => 'text',
    ));
    
    // Testimonials Section
    $wp_customize->add_section('pousada_testimonials', array(
        'title' => __('Testimonials', 'pousada-bombinhas'),
        'priority' => 60,
    ));
    
    // Enable Testimonials
    $wp_customize->add_setting('show_testimonials_section', array(
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    
    $wp_customize->add_control('show_testimonials_section', array(
        'label' => __('Show Testimonials Section', 'pousada-bombinhas'),
        'section' => 'pousada_testimonials',
        'type' => 'checkbox',
    ));
    
    // Testimonials Title
    $wp_customize->add_setting('testimonials_title', array(
        'default' => 'O que nossos hóspedes dizem',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('testimonials_title', array(
        'label' => __('Testimonials Section Title', 'pousada-bombinhas'),
        'section' => 'pousada_testimonials',
        'type' => 'text',
    ));
    
    // Call to Action Section
    $wp_customize->add_section('pousada_cta', array(
        'title' => __('Call to Action', 'pousada-bombinhas'),
        'priority' => 65,
    ));
    
    // CTA Title
    $wp_customize->add_setting('cta_title', array(
        'default' => 'Reserve sua estadia hoje mesmo',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('cta_title', array(
        'label' => __('CTA Title', 'pousada-bombinhas'),
        'section' => 'pousada_cta',
        'type' => 'text',
    ));
    
    // CTA Description
    $wp_customize->add_setting('cta_description', array(
        'default' => 'Entre em contato conosco e garante o melhor preço para suas férias em Bombinhas.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('cta_description', array(
        'label' => __('CTA Description', 'pousada-bombinhas'),
        'section' => 'pousada_cta',
        'type' => 'textarea',
    ));
    
    // Footer Section
    $wp_customize->add_section('pousada_footer', array(
        'title' => __('Footer Settings', 'pousada-bombinhas'),
        'priority' => 70,
    ));
    
    // Footer Copyright
    $wp_customize->add_setting('footer_copyright', array(
        'default' => 'Feito com ❤️ para proporcionar experiências inesquecíveis.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('footer_copyright', array(
        'label' => __('Footer Copyright Text', 'pousada-bombinhas'),
        'section' => 'pousada_footer',
        'type' => 'text',
    ));
}
add_action('customize_register', 'pousada_customize_register');

/**
 * Output custom CSS based on customizer settings
 */
function pousada_customizer_css() {
    $primary_color = get_theme_mod('primary_color', '#2c5530');
    $secondary_color = get_theme_mod('secondary_color', '#2563eb');
    $accent_color = get_theme_mod('accent_color', '#84cc16');
    $hero_bg = get_theme_mod('hero_background_image', get_template_directory_uri() . '/images/hero-pousada.jpg');
    
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo esc_html($primary_color); ?>;
            --secondary-color: <?php echo esc_html($secondary_color); ?>;
            --accent-color: <?php echo esc_html($accent_color); ?>;
            --gradient-nature: linear-gradient(135deg, <?php echo esc_html($primary_color); ?>, <?php echo esc_html($secondary_color); ?>);
            --gradient-ocean: linear-gradient(135deg, <?php echo esc_html($secondary_color); ?>, <?php echo esc_html($accent_color); ?>);
        }
        
        .hero-section {
            background-image: url('<?php echo esc_url($hero_bg); ?>');
        }
        
        .hero-accent {
            color: <?php echo esc_html($accent_color); ?> !important;
        }
    </style>
    <?php
}
add_action('wp_head', 'pousada_customizer_css');

/**
 * Customizer live preview
 */
function pousada_customize_preview_js() {
    wp_enqueue_script('pousada-customizer-preview', get_template_directory_uri() . '/js/customizer-preview.js', array('customize-preview'), POUSADA_THEME_VERSION, true);
}
add_action('customize_preview_init', 'pousada_customize_preview_js');