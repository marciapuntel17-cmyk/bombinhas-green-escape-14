    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
                
                <!-- Informações da Pousada -->
                <div class="footer-section">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <div class="logo-icon" style="margin-right: 0.5rem;"></div>
                        <h3><?php bloginfo('name'); ?></h3>
                    </div>
                    <p style="color: rgba(255, 255, 255, 0.8); margin-bottom: 1rem; line-height: 1.6;">
                        Seu refúgio na natureza exuberante da Mata Atlântica, 
                        com todo o conforto e tranquilidade que você merece.
                    </p>
                    <div style="display: flex; gap: 1rem;">
                        <a href="#" style="color: rgba(255, 255, 255, 0.6);" aria-label="Instagram">📷</a>
                        <a href="#" style="color: rgba(255, 255, 255, 0.6);" aria-label="Facebook">📘</a>
                    </div>
                </div>

                <!-- Contato -->
                <div class="footer-section">
                    <h3>Contato</h3>
                    <div style="margin-bottom: 0.75rem;">
                        <span style="margin-right: 0.75rem;">📞</span>
                        <a href="tel:+55<?php echo str_replace(['(', ')', ' ', '-'], '', get_theme_mod('contact_phone', '48999999999')); ?>">
                            <?php echo get_theme_mod('contact_phone', '(48) 99999-9999'); ?>
                        </a>
                    </div>
                    <div style="margin-bottom: 0.75rem;">
                        <span style="margin-right: 0.75rem;">📧</span>
                        <a href="mailto:<?php echo get_theme_mod('contact_email', 'contato@pousadabombinhas.com.br'); ?>">
                            <?php echo get_theme_mod('contact_email', 'contato@pousadabombinhas.com.br'); ?>
                        </a>
                    </div>
                    <div>
                        <span style="margin-right: 0.75rem;">📍</span>
                        <div style="display: inline-block;">
                            <p><?php echo get_theme_mod('address_line1', 'Rua das Garoupas, 123'); ?></p>
                            <p><?php echo get_theme_mod('address_line2', 'Centro - Bombinhas, SC'); ?></p>
                            <p><?php echo get_theme_mod('address_cep', 'CEP: 88215-000'); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Informações -->
                <div class="footer-section">
                    <h3>Informações</h3>
                    <div style="color: rgba(255, 255, 255, 0.8);">
                        <p style="margin-bottom: 0.5rem;">Check-in: a partir das 14h</p>
                        <p style="margin-bottom: 0.5rem;">Check-out: até as 12h</p>
                        <p style="margin-bottom: 0.5rem;">Café da manhã: 7h às 10h</p>
                    </div>
                    <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                        <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.9rem;">
                            Política de Cancelamento disponível via WhatsApp
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="footer-bottom">
                <p style="display: flex; align-items: center; justify-content: center;">
                    © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Feito com 
                    <span style="color: #ef4444; margin: 0 0.25rem;">❤️</span> 
                    para proporcionar experiências inesquecíveis.
                </p>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>