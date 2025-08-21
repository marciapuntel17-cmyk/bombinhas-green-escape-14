import { Shield, Wifi, Car, Coffee, Waves, TreePine } from "lucide-react";

const TrustBadges = () => {
  const badges = [
    {
      icon: <Shield className="w-6 h-6" />,
      title: "Área Segura",
      description: "Estacionamento vigiado 24h"
    },
    {
      icon: <Wifi className="w-6 h-6" />,
      title: "Wi-Fi Gratuito",
      description: "Internet de alta velocidade"
    },
    {
      icon: <Car className="w-6 h-6" />,
      title: "Estacionamento Incluso",
      description: "Vagas cobertas e descobertas"
    },
    {
      icon: <Coffee className="w-6 h-6" />,
      title: "Café Incluso",
      description: "Produtos frescos diariamente"
    },
    {
      icon: <Waves className="w-6 h-6" />,
      title: "700m da Praia",
      description: "Caminhada tranquila até o mar"
    },
    {
      icon: <TreePine className="w-6 h-6" />,
      title: "Mata Atlântica",
      description: "Natureza preservada ao redor"
    }
  ];

  return (
    <section className="py-12 bg-primary/5">
      <div className="container mx-auto px-4">
        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
          {badges.map((badge, index) => (
            <div 
              key={index}
              className="flex flex-col items-center text-center p-4 rounded-lg hover:bg-white/50 transition-colors duration-300"
            >
              <div className="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-3">
                {badge.icon}
              </div>
              <h4 className="font-semibold text-sm mb-1 text-primary">
                {badge.title}
              </h4>
              <p className="text-xs text-muted-foreground">
                {badge.description}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default TrustBadges;