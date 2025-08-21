<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-content">
                
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" rel="home">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="logo-icon"></div>
                        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                    <?php endif; ?>
                </a>

                <nav id="site-navigation" class="main-navigation">
                    <a href="#home">Início</a>
                    <a href="#sobre">Sobre</a>
                    <a href="#acomodacoes">Acomodações</a>
                    <a href="#experiencias">Experiências</a>
                    <a href="#localizacao">Localização</a>
                    <a href="#contato">Contato</a>
                    <a href="#contato" class="btn btn-primary">Reserve Agora</a>
                </nav>

                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                    ☰
                </button>
                
            </div>
        </div>
    </header>

    <div id="content" class="site-content">