<?php
/**
 * Index Template
 * Template principal do tema Pousada Praia de Bombinhas
 */

get_header(); ?>

<main id="main" class="site-main">
    
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content animate-fadeIn">
                <h1 class="hero-title">
                    <?php echo get_theme_mod('hero_title', 'Conforto e Natureza no'); ?>
                    <span class="hero-accent"><?php echo get_theme_mod('hero_title_accent', 'Coração de Bombinhas'); ?></span>
                </h1>
                
                <p class="hero-subtitle">
                    <?php echo get_theme_mod('hero_subtitle', 'Descanse no verde da Mata Atlântica a poucos passos das praias mais belas de Santa Catarina'); ?>
                </p>
                
                <div class="hero-buttons">
                    <a href="#contato" class="btn btn-primary btn-lg">
                        <?php echo get_theme_mod('hero_btn_primary', 'Reserve Sua Estadia'); ?>
                    </a>
                    <a href="#sobre" class="btn btn-secondary btn-lg">
                        <?php echo get_theme_mod('hero_btn_secondary', 'Saiba Mais'); ?>
                    </a>
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
                <?php echo get_theme_mod('about_title', 'Um Refúgio Tranquilo na Natureza'); ?>
            </h2>
            <p class="section-subtitle">
                <?php echo get_theme_mod('about_subtitle', 'A Pousada Praia de Bombinhas oferece a combinação perfeita entre conforto e natureza. Localizada estrategicamente no coração de Bombinhas, você estará a apenas 700 metros das praias mais deslumbrantes de Santa Catarina, imerso na exuberante Mata Atlântica.'); ?>
            </p>

            <div class="cards-grid">
                <!-- Café da Manhã -->
                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">☕</div>
                        <h3 class="card-title">Café da Manhã Incluso</h3>
                        <p class="card-description">
                            Comece seu dia com energia! Café fresquinho e delicioso incluído na sua estadia.
                        </p>
                    </div>
                </div>

                <!-- Piscina -->
                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">🌊</div>
                        <h3 class="card-title">Piscina & Área de Lazer</h3>
                        <p class="card-description">
                            Relaxe em nossa piscina cristalina cercada pela natureza exuberante.
                        </p>
                    </div>
                </div>

                <!-- Churrasqueira -->
                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">🍖</div>
                        <h3 class="card-title">Cozinha com Churrasqueira</h3>
                        <p class="card-description">
                            Cozinha comum equipada e área de churrasqueira para momentos especiais.
                        </p>
                    </div>
                </div>

                <!-- Estacionamento -->
                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">🚗</div>
                        <h3 class="card-title">Estacionamento Vigiado</h3>
                        <p class="card-description">
                            Segurança e tranquilidade para seu veículo durante toda a estadia.
                        </p>
                    </div>
                </div>

                <!-- Wi-Fi -->
                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">📶</div>
                        <h3 class="card-title">Wi-Fi Gratuito</h3>
                        <p class="card-description">
                            Conexão de qualidade para você compartilhar seus momentos especiais.
                        </p>
                    </div>
                </div>

                <!-- Mata Atlântica -->
                <div class="card">
                    <div class="card-content">
                        <div class="card-icon">🌲</div>
                        <h3 class="card-title">Mata Atlântica</h3>
                        <p class="card-description">
                            Cercados pela natureza preservada, desfrute da paz que só a natureza oferece.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div style="background: var(--gradient-sunset); border-radius: 1rem; padding: 3rem; color: white; box-shadow: var(--shadow-ocean);">
                    <h3 style="font-size: 2rem; font-weight: bold; margin-bottom: 1rem;">
                        Perfeito para Casais e Famílias
                    </h3>
                    <p style="font-size: 1.25rem; opacity: 0.9; max-width: 32rem; margin: 0 auto;">
                        Seja para uma lua de mel romântica ou férias em família, nossa pousada oferece 
                        o ambiente ideal para criar memórias inesquecíveis em meio à natureza preservada.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Acomodações Section -->
    <section id="acomodacoes" class="section">
        <div class="container">
            <h2 class="section-title">
                <?php echo get_theme_mod('accommodations_title', 'Acomodações em Harmonia com a Natureza'); ?>
            </h2>
            <p class="section-subtitle">
                <?php echo get_theme_mod('accommodations_subtitle', 'Nossos chalés foram projetados para oferecer máximo conforto enquanto mantêm você conectado com a beleza natural da Mata Atlântica.'); ?>
            </p>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div>
                    <h3 style="font-size: 2rem; font-weight: bold; color: var(--text-primary); margin-bottom: 1.5rem;">
                        Chalés Integrados à Mata Atlântica
                    </h3>
                    
                    <p style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 2rem; line-height: 1.7;">
                        Cada acomodação foi cuidadosamente planejada para proporcionar uma experiência 
                        única de imersão na natureza, sem abrir mão do conforto e comodidades modernas.
                    </p>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 2rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="color: var(--primary-color);">👁️</span>
                            <span style="color: var(--text-primary); font-weight: 500;">Vista para a natureza</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="color: var(--secondary-color);">🛡️</span>
                            <span style="color: var(--text-primary); font-weight: 500;">Privacidade garantida</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="color: var(--primary-color);">🛏️</span>
                            <span style="color: var(--text-primary); font-weight: 500;">Conforto excepcional</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span style="color: var(--secondary-color);">👨‍👩‍👧‍👦</span>
                            <span style="color: var(--text-primary); font-weight: 500;">Ideal para casais e famílias</span>
                        </div>
                    </div>

                    <div style="background: rgba(229, 231, 235, 0.5); border-radius: 0.75rem; padding: 1.5rem; margin-bottom: 2rem; box-shadow: var(--shadow-soft);">
                        <h4 style="font-size: 1.25rem; font-weight: 600; color: var(--text-primary); margin-bottom: 0.75rem;">
                            O que você encontrará:
                        </h4>
                        <ul style="color: var(--text-secondary); line-height: 1.8; list-style: none; padding: 0;">
                            <li>• Arquitetura rústica em madeira</li>
                            <li>• Área externa privativa</li>
                            <li>• Integração harmoniosa com a vegetação</li>
                            <li>• Ambiente silencioso e relaxante</li>
                            <li>• Limpeza e manutenção exemplares</li>
                        </ul>
                    </div>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#contato" class="btn btn-primary btn-lg">
                            Consultar Disponibilidade
                        </a>
                        <a href="#" class="btn btn-secondary btn-lg" style="background: transparent; color: var(--primary-color); border: 1px solid var(--primary-color);">
                            Ver Mais Fotos
                        </a>
                    </div>
                </div>

                <div class="card" style="box-shadow: var(--shadow-nature);">
                    <div style="position: relative;">
                        <img 
                            src="<?php echo get_theme_mod('accommodations_image', get_template_directory_uri() . '/images/acomodacoes.jpg'); ?>" 
                            alt="Acomodações da Pousada Praia de Bombinhas"
                            style="width: 100%; height: 400px; object-fit: cover; border-radius: 0.75rem;"
                        >
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.3), transparent); border-radius: 0.75rem;"></div>
                        <div style="position: absolute; bottom: 1.5rem; left: 1.5rem; color: white;">
                            <h4 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Chalés Premium</h4>
                            <p style="opacity: 0.9;">Conforto e natureza em perfeita harmonia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experiências Section -->
    <section id="experiencias" class="section section-bg-muted">
        <div class="container">
            <h2 class="section-title">
                <?php echo get_theme_mod('experiences_title', 'Experiências Inesquecíveis'); ?>
            </h2>
            <p class="section-subtitle">
                <?php echo get_theme_mod('experiences_subtitle', 'Descubra as maravilhas que Bombinhas tem a oferecer, desde praias paradisíacas até trilhas pela natureza preservada.'); ?>
            </p>

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
                        <div style="margin-bottom: 1.5rem;">
                            <div style="display: flex; align-items: center; color: var(--text-primary); margin-bottom: 0.75rem;">
                                <span style="width: 8px; height: 8px; background: var(--primary-color); border-radius: 50%; margin-right: 0.75rem;"></span>
                                Frutas tropicais da região
                            </div>
                            <div style="display: flex; align-items: center; color: var(--text-primary); margin-bottom: 0.75rem;">
                                <span style="width: 8px; height: 8px; background: var(--secondary-color); border-radius: 50%; margin-right: 0.75rem;"></span>
                                Pães e bolos caseiros
                            </div>
                            <div style="display: flex; align-items: center; color: var(--text-primary); margin-bottom: 0.75rem;">
                                <span style="width: 8px; height: 8px; background: var(--primary-color); border-radius: 50%; margin-right: 0.75rem;"></span>
                                Café brasileiro de qualidade
                            </div>
                            <div style="display: flex; align-items: center; color: var(--text-primary); margin-bottom: 0.75rem;">
                                <span style="width: 8px; height: 8px; background: var(--secondary-color); border-radius: 50%; margin-right: 0.75rem;"></span>
                                Delícias regionais
                            </div>
                        </div>
                        <a href="#contato" class="btn btn-primary btn-lg">
                            Reserve e Experimente
                        </a>
                    </div>
                    <div style="position: relative; height: 300px;">
                        <img 
                            src="<?php echo get_theme_mod('breakfast_image', get_template_directory_uri() . '/images/cafe-da-manha.jpg'); ?>" 
                            alt="Café da manhã da Pousada Praia de Bombinhas"
                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 0 0.75rem 0.75rem 0;"
                        >
                    </div>
                </div>
            </div>

            <!-- Atrações Próximas -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div class="card" style="box-shadow: var(--shadow-ocean);">
                    <div style="position: relative;">
                        <img 
                            src="<?php echo get_theme_mod('beach_image', get_template_directory_uri() . '/images/praia-bombinhas.jpg'); ?>" 
                            alt="Praias de Bombinhas"
                            style="width: 100%; height: 400px; object-fit: cover; border-radius: 0.75rem;"
                        >
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.5), transparent); border-radius: 0.75rem;"></div>
                        <div style="position: absolute; bottom: 1.5rem; left: 1.5rem; color: white;">
                            <h4 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Praias Cristalinas</h4>
                            <p style="opacity: 0.9;">A apenas 700m da pousada</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 style="font-size: 2rem; font-weight: bold; color: var(--text-primary); margin-bottom: 1.5rem;">
                        O Melhor de Bombinhas ao Seu Alcance
                    </h3>
                    
                    <div style="margin-bottom: 2rem;">
                        <!-- Praias -->
                        <div class="card" style="margin-bottom: 1rem;">
                            <div style="padding: 1rem; display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="flex-shrink: 0; padding: 0.5rem; background: rgba(229, 231, 235, 0.5); border-radius: 0.5rem;">
                                    🌊
                                </div>
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

                        <!-- Trilhas -->
                        <div class="card" style="margin-bottom: 1rem;">
                            <div style="padding: 1rem; display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="flex-shrink: 0; padding: 0.5rem; background: rgba(229, 231, 235, 0.5); border-radius: 0.5rem;">
                                    ⛰️
                                </div>
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

                        <!-- Mirantes -->
                        <div class="card" style="margin-bottom: 1rem;">
                            <div style="padding: 1rem; display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="flex-shrink: 0; padding: 0.5rem; background: rgba(229, 231, 235, 0.5); border-radius: 0.5rem;">
                                    📷
                                </div>
                                <div>
                                    <h4 style="font-size: 1.1rem; font-weight: 600; color: var(--text-primary); margin-bottom: 0.5rem;">
                                        Mirantes Espetaculares
                                    </h4>
                                    <p style="color: var(--text-secondary);">
                                        Vistas panorâmicas inesquecíveis da costa catarinense
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Gastronomia -->
                        <div class="card" style="margin-bottom: 1rem;">
                            <div style="padding: 1rem; display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="flex-shrink: 0; padding: 0.5rem; background: rgba(229, 231, 235, 0.5); border-radius: 0.5rem;">
                                    🍽️
                                </div>
                                <div>
                                    <h4 style="font-size: 1.1rem; font-weight: 600; color: var(--text-primary); margin-bottom: 0.5rem;">
                                        Gastronomia Local
                                    </h4>
                                    <p style="color: var(--text-secondary);">
                                        Restaurantes com frutos do mar frescos e culinária regional
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="padding: 1.5rem; background: var(--gradient-sunset); border-radius: 0.75rem; color: white; box-shadow: var(--shadow-ocean);">
                        <div style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                            <span style="margin-right: 0.5rem;">📍</span>
                            <h4 style="font-size: 1.1rem; font-weight: 600;">Localização Privilegiada</h4>
                        </div>
                        <p style="opacity: 0.9;">
                            No centro de Bombinhas, você terá fácil acesso a restaurantes, lojas e 
                            todas as atrações naturais que fazem desta região um destino único.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Localização Section -->
    <section id="localizacao" class="section">
        <div class="container">
            <h2 class="section-title">
                <?php echo get_theme_mod('location_title', 'Localização Privilegiada'); ?>
            </h2>
            <p class="section-subtitle">
                <?php echo get_theme_mod('location_subtitle', 'Estrategicamente posicionada no centro de Bombinhas, nossa pousada oferece o equilíbrio perfeito entre tranquilidade e conveniência.'); ?>
            </p>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: stretch;">
                <!-- Informações de Localização -->
                <div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-icon">📍</div>
                                <h3 class="card-title">Centro de Bombinhas</h3>
                                <p class="card-description">Localizada estrategicamente no coração da cidade</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-content">
                                <div class="card-icon">⏰</div>
                                <h3 class="card-title">700m das Praias</h3>
                                <p class="card-description">Caminhada de 8 minutos até as praias principais</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-content">
                                <div class="card-icon">🚗</div>
                                <h3 class="card-title">Fácil Acesso</h3>
                                <p class="card-description">Próximo a restaurantes, comércio e atrações</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-content">
                                <div class="card-icon">✈️</div>
                                <h3 class="card-title">Como Chegar</h3>
                                <p class="card-description">1h30 do Aeroporto de Florianópolis</p>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="background: var(--gradient-nature); color: white; margin-bottom: 1.5rem;">
                        <div style="padding: 2rem;">
                            <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">Por que Escolher Nossa Localização?</h3>
                            <div>
                                <div style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span style="width: 8px; height: 8px; background: white; border-radius: 50%; margin-right: 0.75rem;"></span>
                                    <span>Tranquilidade da Mata Atlântica</span>
                                </div>
                                <div style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span style="width: 8px; height: 8px; background: white; border-radius: 50%; margin-right: 0.75rem;"></span>
                                    <span>Proximidade das principais praias</span>
                                </div>
                                <div style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span style="width: 8px; height: 8px; background: white; border-radius: 50%; margin-right: 0.75rem;"></span>
                                    <span>Acesso fácil a restaurantes e comércio</span>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <span style="width: 8px; height: 8px; background: white; border-radius: 50%; margin-right: 0.75rem;"></span>
                                    <span>Estacionamento seguro disponível</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div style="padding: 1.5rem;">
                            <h4 style="font-size: 1.25rem; font-weight: 600; color: var(--text-primary); margin-bottom: 1rem;">Endereço</h4>
                            <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                                <?php echo get_theme_mod('address_line1', 'Rua das Garoupas, 123'); ?><br>
                                <?php echo get_theme_mod('address_line2', 'Centro - Bombinhas, SC'); ?><br>
                                <?php echo get_theme_mod('address_cep', 'CEP: 88215-000'); ?>
                            </p>
                            <div style="font-size: 0.9rem; color: var(--text-secondary);">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                    <span>Praia de Bombinhas:</span>
                                    <span style="font-weight: 500;">700m (8 min caminhando)</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                    <span>Praia de Bombas:</span>
                                    <span style="font-weight: 500;">1,2km (15 min caminhando)</span>
                                </div>
                                <div style="display: flex; justify-content: space-between;">
                                    <span>Centro da cidade:</span>
                                    <span style="font-weight: 500;">300m (4 min caminhando)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mapa -->
                <div style="height: 500px; min-height: 400px;">
                    <div class="card" style="height: 100%; box-shadow: var(--shadow-ocean);">
                        <div style="height: 100%; background: var(--gradient-ocean); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; color: white; padding: 2rem; text-align: center;">
                            <div>
                                <div style="font-size: 4rem; margin-bottom: 1rem;">📍</div>
                                <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Mapa Interativo</h3>
                                <p style="opacity: 0.9; max-width: 20rem; margin-bottom: 1rem;">
                                    Explore nossa localização e descubra as atrações próximas
                                </p>
                                <div style="font-size: 0.9rem; opacity: 0.8;">
                                    <p>🗺️ Google Maps será integrado aqui</p>
                                    <p style="margin-top: 0.5rem;">Coordenadas aproximadas:</p>
                                    <p>-27.1394° S, -48.4814° W</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato Section -->
    <section id="contato" class="section section-bg-muted">
        <div class="container">
            <h2 class="section-title">
                <?php echo get_theme_mod('contact_title', 'Reserve Sua Estadia dos Sonhos'); ?>
            </h2>
            <p class="section-subtitle">
                <?php echo get_theme_mod('contact_subtitle', 'Entre em contato conosco e garante sua reserva na natureza exuberante de Bombinhas. Estamos prontos para recebê-lo!'); ?>
            </p>

            <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 2rem;">
                <!-- Informações de Contato -->
                <div>
                    <!-- Cards de Contato -->
                    <div style="margin-bottom: 1rem;">
                        <div class="card">
                            <div style="padding: 1.5rem; display: flex; align-items: center; gap: 1rem;">
                                <div style="padding: 0.75rem; background: rgba(229, 231, 235, 0.5); border-radius: 0.5rem;">
                                    📞
                                </div>
                                <div>
                                    <h3 style="font-size: 1.1rem; font-weight: 600; color: var(--text-primary);">Telefone</h3>
                                    <a href="tel:+5548999999999" style="color: var(--text-secondary); text-decoration: none;">
                                        <?php echo get_theme_mod('contact_phone', '(48) 99999-9999'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <div class="card">
                            <div style="padding: 1.5rem; display: flex; align-items: center; gap: 1rem;">
                                <div style="padding: 0.75rem; background: rgba(229, 231, 235, 0.5); border-radius: 0.5rem;">
                                    📧
                                </div>
                                <div>
                                    <h3 style="font-size: 1.1rem; font-weight: 600; color: var(--text-primary);">E-mail</h3>
                                    <a href="mailto:<?php echo get_theme_mod('contact_email', 'contato@pousadabombinhas.com.br'); ?>" style="color: var(--text-secondary); text-decoration: none;">
                                        <?php echo get_theme_mod('contact_email', 'contato@pousadabombinhas.com.br'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <div class="card">
                            <div style="padding: 1.5rem; display: flex; align-items: center; gap: 1rem;">
                                <div style="padding: 0.75rem; background: rgba(229, 231, 235, 0.5); border-radius: 0.5rem;">
                                    💬
                                </div>
                                <div>
                                    <h3 style="font-size: 1.1rem; font-weight: 600; color: var(--text-primary);">WhatsApp</h3>
                                    <a href="https://wa.me/<?php echo get_theme_mod('contact_whatsapp', '5548999999999'); ?>" style="color: var(--text-secondary); text-decoration: none;" target="_blank">
                                        <?php echo get_theme_mod('contact_phone', '(48) 99999-9999'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Horário de Atendimento -->
                    <div class="card" style="background: var(--gradient-sunset); color: white; margin-bottom: 1.5rem;">
                        <div style="padding: 1.5rem;">
                            <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 1rem;">Horário de Atendimento</h3>
                            <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                                <span style="margin-right: 0.5rem;">⏰</span>
                                <span>Segunda a Domingo: 8h às 22h</span>
                            </div>
                            <div style="opacity: 0.9; font-size: 0.9rem; margin-top: 1rem;">
                                Respondemos rapidamente via WhatsApp para sua comodidade!
                            </div>
                        </div>
                    </div>

                    <!-- Check-in/Check-out -->
                    <div class="card" style="background: var(--primary-color); color: white; text-align: center;">
                        <div style="padding: 1.5rem;">
                            <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.75rem;">Check-in & Check-out</h3>
                            <div style="font-size: 0.9rem;">
                                <div>Check-in: a partir das 14h</div>
                                <div>Check-out: até as 12h</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulário de Reserva -->
                <div>
                    <div class="card">
                        <div style="padding: 2rem;">
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--text-primary); margin-bottom: 1.5rem;">
                                Formulário de Reserva
                            </h3>
                            
                            <form id="reservation-form" style="margin-bottom: 0;">
                                <div class="form-grid form-grid-2" style="margin-bottom: 1rem;">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Nome Completo *</label>
                                        <input 
                                            class="form-input" 
                                            type="text" 
                                            id="name" 
                                            name="name" 
                                            required 
                                            placeholder="Seu nome completo"
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="email">E-mail *</label>
                                        <input 
                                            class="form-input" 
                                            type="email" 
                                            id="email" 
                                            name="email" 
                                            required 
                                            placeholder="seu@email.com"
                                        >
                                    </div>
                                </div>

                                <div class="form-grid form-grid-3" style="margin-bottom: 1rem;">
                                    <div class="form-group">
                                        <label class="form-label" for="phone">Telefone/WhatsApp *</label>
                                        <input 
                                            class="form-input" 
                                            type="tel" 
                                            id="phone" 
                                            name="phone" 
                                            required 
                                            placeholder="(48) 99999-9999"
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="checkin">
                                            📅 Check-in *
                                        </label>
                                        <input 
                                            class="form-input" 
                                            type="date" 
                                            id="checkin" 
                                            name="checkin" 
                                            required
                                        >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="checkout">
                                            📅 Check-out *
                                        </label>
                                        <input 
                                            class="form-input" 
                                            type="date" 
                                            id="checkout" 
                                            name="checkout" 
                                            required
                                        >
                                    </div>
                                </div>

                                <div class="form-group" style="margin-bottom: 1rem;">
                                    <label class="form-label" for="guests">
                                        👥 Número de Hóspedes *
                                    </label>
                                    <input 
                                        class="form-input" 
                                        type="number" 
                                        id="guests" 
                                        name="guests" 
                                        min="1" 
                                        required 
                                        placeholder="Quantas pessoas?"
                                    >
                                </div>

                                <div class="form-group" style="margin-bottom: 1.5rem;">
                                    <label class="form-label" for="message">Mensagem (opcional)</label>
                                    <textarea 
                                        class="form-input form-textarea" 
                                        id="message" 
                                        name="message" 
                                        placeholder="Conte-nos sobre suas necessidades especiais, preferências ou dúvidas..."
                                        rows="4"
                                    ></textarea>
                                </div>

                                <button 
                                    type="submit" 
                                    class="btn btn-primary btn-lg" 
                                    style="width: 100%; font-size: 1.1rem;"
                                >
                                    💬 Enviar Reserva via WhatsApp
                                </button>
                                
                                <p style="font-size: 0.9rem; color: var(--text-secondary); text-align: center; margin-top: 1rem;">
                                    * Campos obrigatórios. Sua reserva será enviada via WhatsApp para confirmação.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- WhatsApp Float Button -->
<a 
    href="https://wa.me/<?php echo get_theme_mod('contact_whatsapp', '5548999999999'); ?>"
    class="whatsapp-float"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Contato via WhatsApp"
>
    <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.9 3.515z"/>
    </svg>
</a>

<script>
// Navegação suave
document.addEventListener('DOMContentLoaded', function() {
    // Navegação suave para links internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Menu mobile toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main-navigation');
    
    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('mobile-open');
        });
    }

    // Formulário de reserva
    const form = document.getElementById('reservation-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(form);
            const name = formData.get('name');
            const email = formData.get('email');
            const phone = formData.get('phone');
            const checkin = formData.get('checkin');
            const checkout = formData.get('checkout');
            const guests = formData.get('guests');
            const message = formData.get('message');
            
            const whatsappMessage = `Olá! Gostaria de fazer uma reserva na Pousada Praia de Bombinhas:

👤 Nome: ${name}
📧 Email: ${email}
📱 Telefone: ${phone}
📅 Check-in: ${checkin}
📅 Check-out: ${checkout}
👥 Hóspedes: ${guests}

💬 Mensagem: ${message}`;

            const whatsappNumber = '<?php echo get_theme_mod("contact_whatsapp", "5548999999999"); ?>';
            const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
            
            window.open(whatsappUrl, '_blank');
        });
    }
});
</script>

<?php get_footer(); ?>