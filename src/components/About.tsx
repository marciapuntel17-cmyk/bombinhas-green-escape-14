import { Card, CardContent } from "@/components/ui/card";
import { Wifi, Car, Coffee, Waves, TreePine, Utensils } from "lucide-react";

const About = () => {
  const amenities = [
    {
      icon: <Coffee className="w-8 h-8 text-primary" />,
      title: "Café da Manhã Incluso",
      description: "Comece seu dia com energia! Café fresquinho e delicioso incluído na sua estadia."
    },
    {
      icon: <Waves className="w-8 h-8 text-secondary" />,
      title: "Piscina & Área de Lazer",
      description: "Relaxe em nossa piscina cristalina cercada pela natureza exuberante."
    },
    {
      icon: <Utensils className="w-8 h-8 text-primary" />,
      title: "Cozinha com Churrasqueira",
      description: "Cozinha comum equipada e área de churrasqueira para momentos especiais."
    },
    {
      icon: <Car className="w-8 h-8 text-secondary" />,
      title: "Estacionamento Vigiado",
      description: "Segurança e tranquilidade para seu veículo durante toda a estadia."
    },
    {
      icon: <Wifi className="w-8 h-8 text-primary" />,
      title: "Wi-Fi Gratuito",
      description: "Conexão de qualidade para você compartilhar seus momentos especiais."
    },
    {
      icon: <TreePine className="w-8 h-8 text-secondary" />,
      title: "Mata Atlântica",
      description: "Cercados pela natureza preservada, desfrute da paz que só a natureza oferece."
    }
  ];

  return (
    <section id="sobre" className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-6">
            Um Refúgio Tranquilo na Natureza
          </h2>
          <p className="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
            A Pousada Praia de Bombinhas oferece a combinação perfeita entre conforto e natureza. 
            Localizada estrategicamente no coração de Bombinhas, você estará a apenas 700 metros das 
            praias mais deslumbrantes de Santa Catarina, imerso na exuberante Mata Atlântica.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
          {amenities.map((amenity, index) => (
            <Card key={index} className="bg-card border-border shadow-soft hover:shadow-nature transition-smooth hover:transform hover:scale-105">
              <CardContent className="p-6 text-center">
                <div className="flex justify-center mb-4">
                  {amenity.icon}
                </div>
                <h3 className="text-xl font-semibold text-foreground mb-3">
                  {amenity.title}
                </h3>
                <p className="text-muted-foreground leading-relaxed">
                  {amenity.description}
                </p>
              </CardContent>
            </Card>
          ))}
        </div>

        <div className="bg-gradient-sunset rounded-2xl p-8 md:p-12 text-center text-white shadow-ocean">
          <h3 className="text-2xl md:text-3xl font-bold mb-4">
            Perfeito para Casais e Famílias
          </h3>
          <p className="text-lg md:text-xl text-white/90 max-w-2xl mx-auto">
            Seja para uma lua de mel romântica ou férias em família, nossa pousada oferece 
            o ambiente ideal para criar memórias inesquecíveis em meio à natureza preservada.
          </p>
        </div>
      </div>
    </section>
  );
};

export default About;