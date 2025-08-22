import { Heart, Phone, Mail, MapPin, Instagram, Facebook } from "lucide-react";
const Footer = () => {
  return <footer className="bg-foreground text-white py-12">
      <div className="container mx-auto px-4">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {/* Informações da Pousada */}
          <div>
            <div className="flex items-center space-x-2 mb-4">
              <div className="w-8 h-8 bg-gradient-nature rounded-full"></div>
              <h3 className="text-xl font-bold">Pousada Praia de Bombinhas</h3>
            </div>
            <p className="text-white/80 mb-4 leading-relaxed">
              Seu refúgio na natureza exuberante da Mata Atlântica, 
              com todo o conforto e tranquilidade que você merece.
            </p>
            <div className="flex space-x-4">
              <a href="#" className="text-white/60 hover:text-white transition-smooth" aria-label="Instagram">
                <Instagram className="w-6 h-6" />
              </a>
              <a href="#" className="text-white/60 hover:text-white transition-smooth" aria-label="Facebook">
                <Facebook className="w-6 h-6" />
              </a>
            </div>
          </div>

          {/* Contato */}
          <div>
            <h3 className="text-xl font-bold mb-4">Contato</h3>
            <div className="space-y-3">
              <div className="flex items-center space-x-3">
                <Phone className="w-5 h-5 text-primary" />
                <a href="tel:+5548999999999" className="text-white/80 hover:text-white transition-smooth">(47) 99252-1040</a>
              </div>
              <div className="flex items-center space-x-3">
                <Mail className="w-5 h-5 text-secondary" />
                <a href="mailto:contato@pousadabombinhas.com.br" className="text-white/80 hover:text-white transition-smooth">pousadapraiadebombinhascom.br</a>
              </div>
              <div className="flex items-start space-x-3">
                <MapPin className="w-5 h-5 text-primary mt-0.5" />
                <div className="text-white/80">
                  <p>Rua Parati, 720</p>
                  <p>Centro - Bombinhas, SC</p>
                  <p>CEP: 88215-000</p>
                </div>
              </div>
            </div>
          </div>

          {/* Links Úteis */}
          <div>
            <h3 className="text-xl font-bold mb-4">Informações</h3>
            <div className="space-y-2">
              <div className="text-white/80">
                <p className="mb-2">Check-in: a partir das 14h</p>
                <p className="mb-2">Check-out: até as 12h</p>
                <p className="mb-2">Café da manhã: 7h às 10h</p>
              </div>
              <div className="mt-4 pt-4 border-t border-white/20">
                <p className="text-white/60 text-sm">
                  Política de Cancelamento disponível via WhatsApp
                </p>
              </div>
            </div>
          </div>
        </div>

        <div className="border-t border-white/20 mt-8 pt-8 text-center">
          <p className="text-white/60 text-sm flex items-center justify-center">
            © 2024 Pousada Praia de Bombinhas. Feito com 
            <Heart className="w-4 h-4 text-red-400 mx-1" /> 
            para proporcionar experiências inesquecíveis.
          </p>
        </div>
      </div>
    </footer>;
};
export default Footer;