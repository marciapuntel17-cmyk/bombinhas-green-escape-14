import { Button } from "@/components/ui/button";
import heroImage from "@/assets/hero-pousada.jpg";

const Hero = () => {
  return (
    <section id="home" className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Background Image */}
      <div 
        className="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style={{ backgroundImage: `url(${heroImage})` }}
      />
      
      {/* Overlay */}
      <div className="absolute inset-0 bg-gradient-hero" />
      
      {/* Content */}
      <div className="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
        <div className="animate-fadeIn">
          <h1 className="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Conforto e Natureza no
            <span className="block text-accent">Coração de Bombinhas</span>
          </h1>
          
          <p className="text-xl md:text-2xl mb-8 text-white/90 max-w-2xl mx-auto">
            Descanse no verde da Mata Atlântica a poucos passos das praias mais belas de Santa Catarina
          </p>
          
          <div className="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <Button variant="hero" size="lg" className="text-xl px-8 py-4">
              Reserve Sua Estadia
            </Button>
            <Button variant="outline" size="lg" className="text-xl px-8 py-4 bg-white/10 border-white/30 text-white hover:bg-white/20">
              Saiba Mais
            </Button>
          </div>
        </div>
        
        {/* Floating badges */}
        <div className="mt-12 flex flex-wrap justify-center gap-6 text-sm">
          <div className="bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 animate-float">
            🏊‍♀️ Piscina
          </div>
          <div className="bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 animate-float" style={{animationDelay: "0.5s"}}>
            🥐 Café Incluso
          </div>
          <div className="bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 animate-float" style={{animationDelay: "1s"}}>
            🌊 700m da Praia
          </div>
          <div className="bg-white/20 backdrop-blur-sm rounded-full px-4 py-2 animate-float" style={{animationDelay: "1.5s"}}>
            🌿 Mata Atlântica
          </div>
        </div>
      </div>
      
      {/* Scroll indicator */}
      <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div className="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
          <div className="w-1 h-3 bg-white/70 rounded-full mt-2 animate-float"></div>
        </div>
      </div>
    </section>
  );
};

export default Hero;