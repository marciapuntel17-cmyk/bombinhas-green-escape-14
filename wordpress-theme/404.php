<?php
/**
 * 404 Template
 * Template para página de erro 404
 */

get_header(); ?>

<main id="main" class="site-main" style="margin-top: 80px;">
    <div class="container">
        <div class="section text-center">
            <div style="max-width: 32rem; margin: 0 auto;">
                <!-- Ícone de erro -->
                <div style="font-size: 8rem; color: var(--primary-color); margin-bottom: 2rem;">
                    🏝️
                </div>
                
                <!-- Título do erro -->
                <h1 class="section-title" style="color: var(--text-primary); margin-bottom: 1rem;">
                    Oops! Página não encontrada
                </h1>
                
                <!-- Mensagem amigável -->
                <p class="section-subtitle" style="margin-bottom: 3rem;">
                    Parece que você se perdeu nas trilhas de Bombinhas! A página que você está procurando 
                    não foi encontrada, mas que tal explorar outras áreas da nossa pousada?
                </p>
                
                <!-- Card com opções -->
                <div class="card" style="background: var(--gradient-nature); color: white; padding: 2rem; margin-bottom: 3rem; border: none;">
                    <h3 style="margin-bottom: 1.5rem; font-size: 1.5rem;">
                        ✨ Não se preocupe!
                    </h3>
                    <p style="opacity: 0.9; margin-bottom: 2rem; line-height: 1.7;">
                        Aproveite para conhecer nossas acomodações, descobrir as experiências que oferecemos 
                        ou entrar em contato conosco para fazer sua reserva.
                    </p>
                    
                    <!-- Botões de navegação -->
                    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                        <a href="<?php echo home_url(); ?>" class="btn btn-secondary btn-lg">
                            🏠 Página Inicial
                        </a>
                        <a href="<?php echo home_url(); ?>#acomodacoes" class="btn btn-secondary btn-lg">
                            🏨 Acomodações
                        </a>
                        <a href="<?php echo home_url(); ?>#contato" class="btn btn-secondary btn-lg">
                            📞 Contato
                        </a>
                    </div>
                </div>
                
                <!-- Formulário de busca -->
                <div class="card" style="padding: 2rem; margin-bottom: 3rem;">
                    <h4 style="color: var(--text-primary); margin-bottom: 1rem;">
                        🔍 Ou faça uma busca:
                    </h4>
                    <?php get_search_form(); ?>
                </div>
                
                <!-- Informações sobre a pousada -->
                <div class="cards-grid" style="margin-top: 4rem;">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-icon">🌊</div>
                            <h3 class="card-title">Praias Próximas</h3>
                            <p class="card-description">
                                A apenas 700m das praias mais lindas de Bombinhas
                            </p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-content">
                            <div class="card-icon">🌿</div>
                            <h3 class="card-title">Mata Atlântica</h3>
                            <p class="card-description">
                                Cercados pela natureza preservada e exuberante
                            </p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-content">
                            <div class="card-icon">☕</div>
                            <h3 class="card-title">Rico Café Matinal</h3>
                            <p class="card-description">
                                Deliciosos café da manhã, fresquinho e saudável
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- CTA final -->
                <div style="margin-top: 4rem;">
                    <div style="background: var(--gradient-sunset); border-radius: 1rem; padding: 2rem; color: white;">
                        <h3 style="margin-bottom: 1rem;">
                            🎯 Reserve Agora e Garante Sua Vaga!
                        </h3>
                        <p style="opacity: 0.9; margin-bottom: 1.5rem;">
                            Não perca tempo procurando - venha relaxar na natureza de Bombinhas!
                        </p>
                        <a href="<?php echo home_url(); ?>#contato" class="btn btn-secondary btn-lg">
                            Fazer Reserva Agora
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>