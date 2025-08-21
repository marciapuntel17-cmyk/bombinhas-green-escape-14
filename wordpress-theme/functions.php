<?php
/**
 * Functions.php - Pousada Praia de Bombinhas Theme
 * Funções e configurações do tema
 */

// Evitar acesso direto ao arquivo
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuração inicial do tema
 */
function pousada_bombinhas_setup() {
    // Adicionar suporte a título automático
    add_theme_support('title-tag');
    
    // Adicionar suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Adicionar suporte a menus
    add_theme_support('menus');
    
    // Registrar menu principal
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'pousada-bombinhas'),
    ));
    
    // Adicionar suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Adicionar suporte ao customizer
    add_theme_support('customize-selective-refresh-widgets');
    
    // Adicionar suporte a logo customizável
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'pousada_bombinhas_setup');

/**
 * Enfileirar estilos e scripts
 */
function pousada_bombinhas_scripts() {
    // Estilo principal
    wp_enqueue_style(
        'pousada-bombinhas-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );
    
    // Google Fonts (opcional)
    wp_enqueue_style(
        'pousada-bombinhas-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
    
    // Script principal (se necessário)
    wp_enqueue_script(
        'pousada-bombinhas-script',
        get_template_directory_uri() . '/js/main.js',
        array(),
        '1.0.0',
        true
    );
    
    // Localizar script para AJAX (se necessário)
    wp_localize_script('pousada-bombinhas-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('pousada_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'pousada_bombinhas_scripts');

/**
 * Configurações do Customizer
 */
function pousada_bombinhas_customize_register($wp_customize) {
    
    // === SEÇÃO HERO ===
    $wp_customize->add_section('hero_section', array(
        'title'       => __('Seção Hero', 'pousada-bombinhas'),
        'description' => __('Personalize a seção principal do site', 'pousada-bombinhas'),
        'priority'    => 30,
    ));
    
    // Título Principal Hero
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Conforto e Natureza no',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Título Principal', 'pousada-bombinhas'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Título Destaque Hero
    $wp_customize->add_setting('hero_title_accent', array(
        'default'           => 'Coração de Bombinhas',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title_accent', array(
        'label'   => __('Título Destaque', 'pousada-bombinhas'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Subtítulo Hero
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Descanse no verde da Mata Atlântica a poucos passos das praias mais belas de Santa Catarina',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Subtítulo', 'pousada-bombinhas'),
        'section' => 'hero_section',
        'type'    => 'textarea',
    ));
    
    // Botão Primário Hero
    $wp_customize->add_setting('hero_btn_primary', array(
        'default'           => 'Reserve Sua Estadia',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_btn_primary', array(
        'label'   => __('Texto Botão Primário', 'pousada-bombinhas'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Botão Secundário Hero
    $wp_customize->add_setting('hero_btn_secondary', array(
        'default'           => 'Saiba Mais',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_btn_secondary', array(
        'label'   => __('Texto Botão Secundário', 'pousada-bombinhas'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    // Imagem de Fundo Hero
    $wp_customize->add_setting('hero_background_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label'   => __('Imagem de Fundo Hero', 'pousada-bombinhas'),
        'section' => 'hero_section',
    )));
    
    // === SEÇÃO SOBRE ===
    $wp_customize->add_section('about_section', array(
        'title'       => __('Seção Sobre', 'pousada-bombinhas'),
        'description' => __('Personalize a seção sobre a pousada', 'pousada-bombinhas'),
        'priority'    => 31,
    ));
    
    // Título Sobre
    $wp_customize->add_setting('about_title', array(
        'default'           => 'Um Refúgio Tranquilo na Natureza',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_title', array(
        'label'   => __('Título da Seção', 'pousada-bombinhas'),
        'section' => 'about_section',
        'type'    => 'text',
    ));
    
    // Subtítulo Sobre
    $wp_customize->add_setting('about_subtitle', array(
        'default'           => 'A Pousada Praia de Bombinhas oferece a combinação perfeita entre conforto e natureza. Localizada estrategicamente no coração de Bombinhas, você estará a apenas 700 metros das praias mais deslumbrantes de Santa Catarina, imerso na exuberante Mata Atlântica.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('about_subtitle', array(
        'label'   => __('Descrição da Seção', 'pousada-bombinhas'),
        'section' => 'about_section',
        'type'    => 'textarea',
    ));
    
    // === SEÇÃO ACOMODAÇÕES ===
    $wp_customize->add_section('accommodations_section', array(
        'title'       => __('Seção Acomodações', 'pousada-bombinhas'),
        'description' => __('Personalize a seção de acomodações', 'pousada-bombinhas'),
        'priority'    => 32,
    ));
    
    // Título Acomodações
    $wp_customize->add_setting('accommodations_title', array(
        'default'           => 'Acomodações em Harmonia com a Natureza',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('accommodations_title', array(
        'label'   => __('Título da Seção', 'pousada-bombinhas'),
        'section' => 'accommodations_section',
        'type'    => 'text',
    ));
    
    // Subtítulo Acomodações
    $wp_customize->add_setting('accommodations_subtitle', array(
        'default'           => 'Nossos chalés foram projetados para oferecer máximo conforto enquanto mantêm você conectado com a beleza natural da Mata Atlântica.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('accommodations_subtitle', array(
        'label'   => __('Descrição da Seção', 'pousada-bombinhas'),
        'section' => 'accommodations_section',
        'type'    => 'textarea',
    ));
    
    // Imagem Acomodações
    $wp_customize->add_setting('accommodations_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'accommodations_image', array(
        'label'   => __('Imagem das Acomodações', 'pousada-bombinhas'),
        'section' => 'accommodations_section',
    )));
    
    // === SEÇÃO EXPERIÊNCIAS ===
    $wp_customize->add_section('experiences_section', array(
        'title'       => __('Seção Experiências', 'pousada-bombinhas'),
        'description' => __('Personalize a seção de experiências', 'pousada-bombinhas'),
        'priority'    => 33,
    ));
    
    // Título Experiências
    $wp_customize->add_setting('experiences_title', array(
        'default'           => 'Experiências Inesquecíveis',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('experiences_title', array(
        'label'   => __('Título da Seção', 'pousada-bombinhas'),
        'section' => 'experiences_section',
        'type'    => 'text',
    ));
    
    // Subtítulo Experiências
    $wp_customize->add_setting('experiences_subtitle', array(
        'default'           => 'Descubra as maravilhas que Bombinhas tem a oferecer, desde praias paradisíacas até trilhas pela natureza preservada.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('experiences_subtitle', array(
        'label'   => __('Descrição da Seção', 'pousada-bombinhas'),
        'section' => 'experiences_section',
        'type'    => 'textarea',
    ));
    
    // Imagem Café da Manhã
    $wp_customize->add_setting('breakfast_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'breakfast_image', array(
        'label'   => __('Imagem Café da Manhã', 'pousada-bombinhas'),
        'section' => 'experiences_section',
    )));
    
    // Imagem Praia
    $wp_customize->add_setting('beach_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'beach_image', array(
        'label'   => __('Imagem da Praia', 'pousada-bombinhas'),
        'section' => 'experiences_section',
    )));
    
    // === SEÇÃO LOCALIZAÇÃO ===
    $wp_customize->add_section('location_section', array(
        'title'       => __('Seção Localização', 'pousada-bombinhas'),
        'description' => __('Personalize a seção de localização', 'pousada-bombinhas'),
        'priority'    => 34,
    ));
    
    // Título Localização
    $wp_customize->add_setting('location_title', array(
        'default'           => 'Localização Privilegiada',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('location_title', array(
        'label'   => __('Título da Seção', 'pousada-bombinhas'),
        'section' => 'location_section',
        'type'    => 'text',
    ));
    
    // Subtítulo Localização
    $wp_customize->add_setting('location_subtitle', array(
        'default'           => 'Estrategicamente posicionada no centro de Bombinhas, nossa pousada oferece o equilíbrio perfeito entre tranquilidade e conveniência.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('location_subtitle', array(
        'label'   => __('Descrição da Seção', 'pousada-bombinhas'),
        'section' => 'location_section',
        'type'    => 'textarea',
    ));
    
    // Endereço - Linha 1
    $wp_customize->add_setting('address_line1', array(
        'default'           => 'Rua das Garoupas, 123',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('address_line1', array(
        'label'   => __('Endereço - Linha 1', 'pousada-bombinhas'),
        'section' => 'location_section',
        'type'    => 'text',
    ));
    
    // Endereço - Linha 2
    $wp_customize->add_setting('address_line2', array(
        'default'           => 'Centro - Bombinhas, SC',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('address_line2', array(
        'label'   => __('Endereço - Linha 2', 'pousada-bombinhas'),
        'section' => 'location_section',
        'type'    => 'text',
    ));
    
    // CEP
    $wp_customize->add_setting('address_cep', array(
        'default'           => 'CEP: 88215-000',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('address_cep', array(
        'label'   => __('CEP', 'pousada-bombinhas'),
        'section' => 'location_section',
        'type'    => 'text',
    ));
    
    // === SEÇÃO CONTATO ===
    $wp_customize->add_section('contact_section', array(
        'title'       => __('Seção Contato', 'pousada-bombinhas'),
        'description' => __('Personalize informações de contato', 'pousada-bombinhas'),
        'priority'    => 35,
    ));
    
    // Título Contato
    $wp_customize->add_setting('contact_title', array(
        'default'           => 'Reserve Sua Estadia dos Sonhos',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_title', array(
        'label'   => __('Título da Seção', 'pousada-bombinhas'),
        'section' => 'contact_section',
        'type'    => 'text',
    ));
    
    // Subtítulo Contato
    $wp_customize->add_setting('contact_subtitle', array(
        'default'           => 'Entre em contato conosco e garante sua reserva na natureza exuberante de Bombinhas. Estamos prontos para recebê-lo!',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('contact_subtitle', array(
        'label'   => __('Descrição da Seção', 'pousada-bombinhas'),
        'section' => 'contact_section',
        'type'    => 'textarea',
    ));
    
    // Telefone
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '(48) 99999-9999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_phone', array(
        'label'   => __('Telefone', 'pousada-bombinhas'),
        'section' => 'contact_section',
        'type'    => 'text',
    ));
    
    // E-mail
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'contato@pousadabombinhas.com.br',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_email', array(
        'label'   => __('E-mail', 'pousada-bombinhas'),
        'section' => 'contact_section',
        'type'    => 'email',
    ));
    
    // WhatsApp (apenas números)
    $wp_customize->add_setting('contact_whatsapp', array(
        'default'           => '5548999999999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_whatsapp', array(
        'label'       => __('WhatsApp (só números)', 'pousada-bombinhas'),
        'description' => __('Exemplo: 5548999999999 (código país + DDD + número)', 'pousada-bombinhas'),
        'section'     => 'contact_section',
        'type'        => 'text',
    ));
}
add_action('customize_register', 'pousada_bombinhas_customize_register');

/**
 * Adicionar meta tags essenciais
 */
function pousada_bombinhas_head_meta() {
    echo '<meta charset="' . get_bloginfo('charset') . '">' . "\n";
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
    echo '<meta name="description" content="' . get_bloginfo('description') . '">' . "\n";
    echo '<meta name="robots" content="index, follow">' . "\n";
    
    // Open Graph
    echo '<meta property="og:title" content="' . get_bloginfo('name') . '">' . "\n";
    echo '<meta property="og:description" content="' . get_bloginfo('description') . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:url" content="' . home_url() . '">' . "\n";
    
    // Schema.org para Local Business
    echo '<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LodgingBusiness",
        "name": "' . get_bloginfo('name') . '",
        "description": "' . get_bloginfo('description') . '",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "' . get_theme_mod('address_line1', 'Rua das Garoupas, 123') . '",
            "addressLocality": "Bombinhas",
            "addressRegion": "SC",
            "postalCode": "88215-000",
            "addressCountry": "BR"
        },
        "telephone": "' . get_theme_mod('contact_phone', '(48) 99999-9999') . '",
        "email": "' . get_theme_mod('contact_email', 'contato@pousadabombinhas.com.br') . '",
        "url": "' . home_url() . '",
        "amenityFeature": [
            "Piscina",
            "Wi-Fi Gratuito",
            "Café da Manhã Incluso",
            "Estacionamento",
            "Área de Churrasqueira"
        ]
    }
    </script>' . "\n";
}
add_action('wp_head', 'pousada_bombinhas_head_meta');

/**
 * Registrar áreas de widgets (sidebars)
 */
function pousada_bombinhas_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar Principal', 'pousada-bombinhas'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets para a sidebar principal', 'pousada-bombinhas'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 1', 'pousada-bombinhas'),
        'id'            => 'footer-1',
        'description'   => __('Primeira coluna do footer', 'pousada-bombinhas'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 2', 'pousada-bombinhas'),
        'id'            => 'footer-2',
        'description'   => __('Segunda coluna do footer', 'pousada-bombinhas'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer 3', 'pousada-bombinhas'),
        'id'            => 'footer-3',
        'description'   => __('Terceira coluna do footer', 'pousada-bombinhas'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'pousada_bombinhas_widgets_init');

/**
 * Função para limpeza e otimização
 */
function pousada_bombinhas_cleanup() {
    // Remover versões dos scripts e estilos
    remove_action('wp_head', 'wp_generator');
    
    // Remover feeds desnecessários
    remove_action('wp_head', 'feed_links_extra', 3);
    
    // Remover links de shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    
    // Remover emoji scripts (opcional - descomente se não usar emojis)
    // remove_action('wp_head', 'print_emoji_detection_script', 7);
    // remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('init', 'pousada_bombinhas_cleanup');

/**
 * Adicionar classes CSS ao body
 */
function pousada_bombinhas_body_classes($classes) {
    // Adicionar classe para página inicial
    if (is_front_page()) {
        $classes[] = 'is-front-page';
    }
    
    // Adicionar classe para mobile (JavaScript vai atualizar)
    $classes[] = 'js-loading';
    
    return $classes;
}
add_filter('body_class', 'pousada_bombinhas_body_classes');

/**
 * Customizar excerpt
 */
function pousada_bombinhas_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'pousada_bombinhas_excerpt_length', 999);

function pousada_bombinhas_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'pousada_bombinhas_excerpt_more');

/**
 * Adicionar tamanhos de imagem personalizados
 */
function pousada_bombinhas_image_sizes() {
    add_image_size('hero-image', 1920, 1080, true);
    add_image_size('card-image', 400, 300, true);
    add_image_size('gallery-thumb', 300, 200, true);
}
add_action('after_setup_theme', 'pousada_bombinhas_image_sizes');

/**
 * AJAX handler para formulário de contato (opcional)
 */
function pousada_bombinhas_contact_form_handler() {
    // Verificar nonce
    if (!wp_verify_nonce($_POST['nonce'], 'pousada_nonce')) {
        wp_die('Segurança verificada.');
    }
    
    // Sanitizar dados
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Processar os dados (enviar email, salvar no banco, etc.)
    // Implementar conforme necessário
    
    wp_send_json_success('Mensagem enviada com sucesso!');
}
add_action('wp_ajax_contact_form', 'pousada_bombinhas_contact_form_handler');
add_action('wp_ajax_nopriv_contact_form', 'pousada_bombinhas_contact_form_handler');

/**
 * Preload de recursos críticos
 */
function pousada_bombinhas_preload_resources() {
    echo '<link rel="preload" href="' . get_stylesheet_uri() . '" as="style">' . "\n";
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" as="style">' . "\n";
}
add_action('wp_head', 'pousada_bombinhas_preload_resources', 1);