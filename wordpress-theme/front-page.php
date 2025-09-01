<?php
/**
 * Front Page Template
 * Template específico para a página inicial (one-page theme)
 * 
 * @package PousadaBombinhas
 */

get_header(); ?>

<main id="main" class="site-main">
    
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content animate-fadeIn">
                <h1 class="hero-title">
                    <?php echo get_theme_mod('hero_title', 'Pousada Praia de Bombinhas'); ?>
                    <span class="hero-accent"><?php echo get_theme_mod('hero_accent', 'Natureza & Tranquilidade'); ?></span>
                </h1>
                
                <p class="hero-subtitle">
                    <?php echo get_theme_mod('hero_subtitle', 'Seu refúgio na natureza exuberante da Mata Atlântica'); ?>
                </p>
                
                <div class="hero-buttons">
                    <a href="#contato" class="btn btn-primary btn-lg">Reserve Sua Estadia</a>
                    <a href="#sobre" class="btn btn-secondary btn-lg">Saiba Mais</a>
                </div>
                
                <div class="hero-badges">
                    <div class="hero-badge animate-float">🏊‍♀️ Piscina</div>
                    <div class="hero-badge animate-float">🥐 Café Incluso</div>
                    <div class="hero-badge animate-float">🌊 700m da Praia</div>
                    <div class="hero-badge animate-float">🌿 Mata Atlântica</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Section -->
    <section id="sobre" class="section section-bg-muted">
        <div class="container">
            <h2 class="section-title">
                <?php echo get_theme_mod('about_title', 'Sobre Nossa Pousada'); ?>
            </h2>
            <p class="section-subtitle">
                <?php echo get_theme_mod('about_description', 'Localizada no coração de Bombinhas, nossa pousada oferece a combinação perfeita entre conforto e natureza.'); ?>
            </p>

            <div class="cards-grid">
                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">☕</div>
                        <h3 class="card-title">Café da Manhã Incluso</h3>
                        <p class="card-description">Comece seu dia com energia! Café fresquinho e delicioso incluído na sua estadia.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">🌊</div>
                        <h3 class="card-title">Piscina & Área de Lazer</h3>
                        <p class="card-description">Relaxe em nossa piscina cristalina cercada pela natureza exuberante.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">🍖</div>
                        <h3 class="card-title">Cozinha com Churrasqueira</h3>
                        <p class="card-description">Cozinha comum equipada e área de churrasqueira para momentos especiais.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">🚗</div>
                        <h3 class="card-title">Estacionamento Vigiado</h3>
                        <p class="card-description">Segurança e tranquilidade para seu veículo durante toda a estadia.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">📶</div>
                        <h3 class="card-title">Wi-Fi Gratuito</h3>
                        <p class="card-description">Conexão de qualidade para você compartilhar seus momentos especiais.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">🌲</div>
                        <h3 class="card-title">Mata Atlântica</h3>
                        <p class="card-description">Cercados pela natureza preservada, desfrute da paz que só a natureza oferece.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Acomodações Section -->
    <section id="acomodacoes" class="section">
        <div class="container">
            <h2 class="section-title">Acomodações em Harmonia com a Natureza</h2>
            <p class="section-subtitle">Nossos chalés foram projetados para oferecer máximo conforto enquanto mantêm você conectado com a beleza natural da Mata Atlântica.</p>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div>
                    <h3 style="font-size: 2rem; font-weight: bold; color: var(--text-primary); margin-bottom: 1.5rem;">
                        Chalés Integrados à Mata Atlântica
                    </h3>
                    
                    <p style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 2rem; line-height: 1.7;">
                        Cada acomodação foi cuidadosamente planejada para proporcionar uma experiência 
                        única de imersão na natureza, sem abrir mão do conforto e comodidades modernas.
                    </p>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#contato" class="btn btn-primary btn-lg">Consultar Disponibilidade</a>
                    </div>
                </div>

                <div class="card" style="box-shadow: var(--shadow-nature);">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/images/acomodacoes.jpg" 
                        alt="Acomodações da Pousada Praia de Bombinhas"
                        style="width: 100%; height: 400px; object-fit: cover; border-radius: 0.75rem;"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Experiências Section -->
    <section id="experiencias" class="section section-bg-muted">
        <div class="container">
            <h2 class="section-title">Experiências Inesquecíveis</h2>
            <p class="section-subtitle">Descubra as maravilhas que Bombinhas tem a oferecer, desde praias paradisíacas até trilhas pela natureza preservada.</p>

            <!-- Café da Manhã Especial -->
            <div class="card" style="margin-bottom: 4rem; box-shadow: var(--shadow-nature);">
                <div style="display: grid; grid-template-columns: 1fr 1fr;">
                    <div style="padding: 3rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <span style="font-size: 2rem; margin-right: 0.75rem;">❤️</span>
                            <h3 style="font-size: 2rem; font-weight: bold; color: var(--text-primary);">
                                Café da Manhã Fresquinho
                            </h3>
                        </div>
                        <p style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 1.5rem; line-height: 1.7;">
                            Comece cada dia com energia e sabor! Nosso café da manhã incluso oferece 
                            frutas tropicais frescas, pães artesanais, produtos regionais e muito carinho 
                            em cada detalhe.
                        </p>
                        <a href="#contato" class="btn btn-primary btn-lg">Reserve e Experimente</a>
                    </div>
                    <div style="position: relative; height: 300px;">
                        <img 
                            src="<?php echo get_template_directory_uri(); ?>/images/cafe-da-manha.jpg" 
                            alt="Café da manhã da Pousada Praia de Bombinhas"
                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 0 0.75rem 0.75rem 0;"
                        >
                    </div>
                </div>
            </div>

            <!-- Atrações Próximas -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div class="card" style="box-shadow: var(--shadow-ocean);">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/images/praia-bombinhas.jpg" 
                        alt="Praias de Bombinhas"
                        style="width: 100%; height: 400px; object-fit: cover; border-radius: 0.75rem;"
                    >
                </div>

                <div>
                    <h3 style="font-size: 2rem; font-weight: bold; color: var(--text-primary); margin-bottom: 1.5rem;">
                        O Melhor de Bombinhas ao Seu Alcance
                    </h3>
                    
                    <div style="margin-bottom: 2rem;">
                        <div class="card" style="margin-bottom: 1rem;">
                            <div style="padding: 1rem; display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="flex-shrink: 0; padding: 0.5rem; background: rgba(229, 231, 235, 0.5); border-radius: 0.5rem;">🌊</div>
                                <div>
                                    <h4 style="font-size: 1.1rem; font-weight: 600; color: var(--text-primary); margin-bottom: 0.5rem;">
                                        Praias Paradisíacas
                                    </h4>
                                    <p style="color: var(--text-secondary);">
                                        Bombas, Bombinhas, Lagoinha e outras praias cristalinas
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="margin-bottom: 1rem;">
                            <div style="padding: 1rem; display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="flex-shrink: 0; padding: 0.5rem; background: rgba(229, 231, 235, 0.5); border-radius: 0.5rem;">⛰️</div>
                                <div>
                                    <h4 style="font-size: 1.1rem; font-weight: 600; color: var(--text-primary); margin-bottom: 0.5rem;">
                                        Trilhas Ecológicas
                                    </h4>
                                    <p style="color: var(--text-secondary);">
                                        Explore a Mata Atlântica preservada em trilhas deslumbrantes
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div style="padding: 1rem; display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="flex-shrink: 0; padding: 0.5rem; background: rgba(229, 231, 235, 0.5); border-radius: 0.5rem;">🐠</div>
                                <div>
                                    <h4 style="font-size: 1.1rem; font-weight: 600; color: var(--text-primary); margin-bottom: 0.5rem;">
                                        Mergulho & Vida Marinha
                                    </h4>
                                    <p style="color: var(--text-secondary);">
                                        Descubra a rica biodiversidade marinha da região
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Localização Section -->
    <section id="localizacao" class="section">
        <div class="container">
            <h2 class="section-title">Localização Privilegiada</h2>
            <p class="section-subtitle">No coração de Bombinhas, próximo às melhores praias e atrações da região.</p>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div>
                    <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--text-primary); margin-bottom: 1rem;">
                        Endereço
                    </h3>
                    <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                        <?php echo get_theme_mod('address_line1', 'Rua das Garoupas, 123'); ?><br>
                        <?php echo get_theme_mod('address_line2', 'Centro - Bombinhas, SC'); ?><br>
                        <?php echo get_theme_mod('address_cep', 'CEP: 88215-000'); ?>
                    </p>

                    <div style="display: grid; gap: 1rem; margin-bottom: 2rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="color: var(--primary-color);">🏖️</span>
                            <span>700m das principais praias</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="color: var(--secondary-color);">🛍️</span>
                            <span>Próximo ao centro comercial</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="color: var(--primary-color);">🍽️</span>
                            <span>Restaurantes e bares nas redondezas</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="color: var(--secondary-color);">🚌</span>
                            <span>Fácil acesso ao transporte público</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div style="height: 300px; background: linear-gradient(45deg, var(--primary-color), var(--secondary-color)); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem; border-radius: 0.75rem;">
                        📍 Mapa Interativo<br>
                        <small style="font-size: 0.9rem; opacity: 0.8;">(Em breve)</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato Section -->
    <section id="contato" class="section section-bg-muted">
        <div class="container">
            <h2 class="section-title">Entre em Contato</h2>
            <p class="section-subtitle">Estamos prontos para proporcionar a melhor experiência em sua estadia.</p>

            <div style="display: grid; gap: 2rem; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); margin-bottom: 3rem;">
                
                <!-- Phone -->
                <div style="display: flex; align-items: center; gap: 1rem; padding: 1.5rem; background: white; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-soft);">
                    <div style="width: 48px; height: 48px; background: var(--gradient-nature); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.25rem;">📞</div>
                    <div>
                        <div style="font-weight: 600; color: var(--text-primary); margin-bottom: 0.25rem;">Telefone</div>
                        <div style="color: var(--text-secondary);"><?php echo get_theme_mod('contact_phone', '(48) 99999-9999'); ?></div>
                    </div>
                </div>

                <!-- Email -->
                <div style="display: flex; align-items: center; gap: 1rem; padding: 1.5rem; background: white; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-soft);">
                    <div style="width: 48px; height: 48px; background: var(--gradient-ocean); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.25rem;">✉️</div>
                    <div>
                        <div style="font-weight: 600; color: var(--text-primary); margin-bottom: 0.25rem;">Email</div>
                        <div style="color: var(--text-secondary);"><?php echo get_theme_mod('contact_email', 'contato@pousadabombinhas.com.br'); ?></div>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div style="display: flex; align-items: center; gap: 1rem; padding: 1.5rem; background: white; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-soft);">
                    <div style="width: 48px; height: 48px; background: #25d366; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.25rem;">📱</div>
                    <div>
                        <div style="font-weight: 600; color: var(--text-primary); margin-bottom: 0.25rem;">WhatsApp</div>
                        <div style="color: var(--text-secondary);"><?php echo get_theme_mod('contact_phone', '(48) 99999-9999'); ?></div>
                    </div>
                </div>

            </div>

            <!-- WhatsApp Button -->
            <div style="text-align: center;">
                <a href="https://wa.me/55<?php echo get_theme_mod('whatsapp_number', '48999999999'); ?>?text=Olá! Gostaria de fazer uma reserva na Pousada Praia de Bombinhas." 
                   target="_blank" 
                   class="btn btn-lg"
                   style="background-color: #25d366; color: white; border: none; box-shadow: var(--shadow-lg);">
                    📱 Reservar pelo WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/55<?php echo get_theme_mod('whatsapp_number', '48999999999'); ?>?text=Olá! Gostaria de saber mais sobre a Pousada Praia de Bombinhas." 
       target="_blank" 
       class="whatsapp-float"
       aria-label="Contato via WhatsApp">
        📱
    </a>

</main>

<?php get_footer(); ?>