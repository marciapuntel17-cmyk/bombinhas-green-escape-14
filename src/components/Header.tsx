import { useState } from "react";
import { Button } from "@/components/ui/button";
import { Menu, X } from "lucide-react";

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const scrollToSection = (sectionId: string) => {
    const element = document.getElementById(sectionId);
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
      setIsMenuOpen(false);
    }
  };

  return (
    <header className="fixed top-0 left-0 right-0 z-50 bg-background/95 backdrop-blur-md border-b border-border shadow-soft">
      <div className="container mx-auto px-4 py-4">
        <div className="flex items-center justify-between">
          <div className="flex items-center space-x-2">
            <div className="w-8 h-8 bg-gradient-nature rounded-full"></div>
            <h1 className="text-xl font-bold text-foreground">Pousada Praia de Bombinhas</h1>
          </div>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex items-center space-x-6">
            <button 
              onClick={() => scrollToSection("hero")} 
              className="text-foreground hover:text-primary transition-smooth"
            >
              Início
            </button>
            <button 
              onClick={() => scrollToSection("sobre")} 
              className="text-foreground hover:text-primary transition-smooth"
            >
              Sobre
            </button>
            <button 
              onClick={() => scrollToSection("acomodacoes")} 
              className="text-foreground hover:text-primary transition-smooth"
            >
              Acomodações
            </button>
            <button 
              onClick={() => scrollToSection("galeria")} 
              className="text-foreground hover:text-primary transition-smooth"
            >
              Galeria
            </button>
            <button 
              onClick={() => scrollToSection("o-que-fazer")} 
              className="text-foreground hover:text-primary transition-smooth"
            >
              O que Fazer
            </button>
            <button 
              onClick={() => scrollToSection("localizacao")} 
              className="text-foreground hover:text-primary transition-smooth"
            >
              Localização
            </button>
            <button 
              onClick={() => scrollToSection("contato")} 
              className="text-foreground hover:text-primary transition-smooth"
            >
              Contato
            </button>
            <Button variant="hero" size="sm">
              Reserve Agora
            </Button>
          </nav>

          {/* Mobile Menu Button */}
          <button
            onClick={() => setIsMenuOpen(!isMenuOpen)}
            className="md:hidden p-2 text-foreground hover:text-primary"
          >
            {isMenuOpen ? <X size={24} /> : <Menu size={24} />}
          </button>
        </div>

        {/* Mobile Navigation */}
        {isMenuOpen && (
          <nav className="md:hidden mt-4 pb-4 border-t border-border pt-4">
            <div className="flex flex-col space-y-3">
              <button 
                onClick={() => scrollToSection("hero")} 
                className="text-left text-foreground hover:text-primary transition-smooth py-2"
              >
                Início
              </button>
              <button 
                onClick={() => scrollToSection("sobre")} 
                className="text-left text-foreground hover:text-primary transition-smooth py-2"
              >
                Sobre
              </button>
              <button 
                onClick={() => scrollToSection("acomodacoes")} 
                className="text-left text-foreground hover:text-primary transition-smooth py-2"
              >
                Acomodações
              </button>
              <button 
                onClick={() => scrollToSection("galeria")} 
                className="text-left text-foreground hover:text-primary transition-smooth py-2"
              >
                Galeria
              </button>
              <button 
                onClick={() => scrollToSection("o-que-fazer")} 
                className="text-left text-foreground hover:text-primary transition-smooth py-2"
              >
                O que Fazer
              </button>
              <button 
                onClick={() => scrollToSection("localizacao")} 
                className="text-left text-foreground hover:text-primary transition-smooth py-2"
              >
                Localização
              </button>
              <button 
                onClick={() => scrollToSection("contato")} 
                className="text-left text-foreground hover:text-primary transition-smooth py-2"
              >
                Contato
              </button>
              <Button variant="hero" size="sm" className="mt-4 w-fit">
                Reserve Agora
              </Button>
            </div>
          </nav>
        )}
      </div>
    </header>
  );
};

export default Header;