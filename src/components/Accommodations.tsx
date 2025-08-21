import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import accommodationsImage from "@/assets/acomodacoes.jpg";
import { Bed, Users, Eye, Shield } from "lucide-react";

const Accommodations = () => {
  const features = [
    {
      icon: <Eye className="w-6 h-6 text-primary" />,
      text: "Vista para a natureza"
    },
    {
      icon: <Shield className="w-6 h-6 text-secondary" />,
      text: "Privacidade garantida"
    },
    {
      icon: <Bed className="w-6 h-6 text-primary" />,
      text: "Conforto excepcional"
    },
    {
      icon: <Users className="w-6 h-6 text-secondary" />,
      text: "Ideal para casais e famílias"
    }
  ];

  return (
    <section id="acomodacoes" className="py-20">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-6">
            Acomodações em Harmonia com a Natureza
          </h2>
          <p className="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
            Nossos chalés foram projetados para oferecer máximo conforto enquanto mantêm 
            você conectado com a beleza natural da Mata Atlântica.
          </p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div className="order-2 lg:order-1">
            <div className="space-y-6">
              <h3 className="text-2xl md:text-3xl font-bold text-foreground">
                Chalés Integrados à Mata Atlântica
              </h3>
              
              <p className="text-lg text-muted-foreground leading-relaxed">
                Cada acomodação foi cuidadosamente planejada para proporcionar uma experiência 
                única de imersão na natureza, sem abrir mão do conforto e comodidades modernas.
              </p>

              <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                {features.map((feature, index) => (
                  <div key={index} className="flex items-center space-x-3">
                    {feature.icon}
                    <span className="text-foreground font-medium">{feature.text}</span>
                  </div>
                ))}
              </div>

              <div className="bg-muted rounded-xl p-6 shadow-soft">
                <h4 className="text-xl font-semibold text-foreground mb-3">
                  O que você encontrará:
                </h4>
                <ul className="space-y-2 text-muted-foreground">
                  <li>• Arquitetura rústica em madeira</li>
                  <li>• Área externa privativa</li>
                  <li>• Integração harmoniosa com a vegetação</li>
                  <li>• Ambiente silencioso e relaxante</li>
                  <li>• Limpeza e manutenção exemplares</li>
                </ul>
              </div>

              <div className="flex flex-col sm:flex-row gap-4">
                <Button variant="hero" size="lg">
                  Consultar Disponibilidade
                </Button>
                <Button variant="outline" size="lg">
                  Ver Mais Fotos
                </Button>
              </div>
            </div>
          </div>

          <div className="order-1 lg:order-2">
            <Card className="overflow-hidden shadow-nature">
              <CardContent className="p-0">
                <div className="relative">
                  <img 
                    src={accommodationsImage} 
                    alt="Acomodações da Pousada Praia de Bombinhas"
                    className="w-full h-[400px] md:h-[500px] object-cover"
                  />
                  <div className="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent" />
                  <div className="absolute bottom-6 left-6 text-white">
                    <h4 className="text-xl font-bold mb-2">Chalés Premium</h4>
                    <p className="text-white/90">Conforto e natureza em perfeita harmonia</p>
                  </div>
                </div>
              </CardContent>
            </Card>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Accommodations;