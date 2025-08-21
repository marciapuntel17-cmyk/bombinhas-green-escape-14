import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { 
  Waves, 
  Mountain, 
  Camera, 
  Utensils, 
  Ship, 
  TreePine,
  Clock,
  MapPin,
  Star
} from "lucide-react";

const WhatToDo = () => {
  const activities = [
    {
      icon: <Waves className="w-6 h-6" />,
      title: "Praias Paradisíacas",
      description: "Explore as 39 praias de Bombinhas, cada uma com sua beleza única.",
      distance: "700m - 2km",
      time: "5-15 min caminhando",
      highlights: ["Praia de Bombinhas", "Praia de Bombas", "Praia do Ribeiro"],
      difficulty: "Fácil"
    },
    {
      icon: <Mountain className="w-6 h-6" />,
      title: "Trilhas Ecológicas",
      description: "Caminhe pela Mata Atlântica preservada e descubra mirantes incríveis.",
      distance: "1-5km",
      time: "30min - 3h",
      highlights: ["Trilha da Tainha", "Trilha do Morro do Macaco", "Trilha da Costeira"],
      difficulty: "Moderada"
    },
    {
      icon: <Camera className="w-6 h-6" />,
      title: "Mirantes Fotográficos",
      description: "Capture vistas panorâmicas de tirar o fôlego da costa catarinense.",
      distance: "2-4km",
      time: "1-2h",
      highlights: ["Morro do Macaco", "Mirante Eco 360°", "Costão Direito"],
      difficulty: "Moderada"
    },
    {
      icon: <Utensils className="w-6 h-6" />,
      title: "Gastronomia Local",
      description: "Saboreie frutos do mar frescos e pratos típicos da região.",
      distance: "100m - 1km",
      time: "5-10 min",
      highlights: ["Restaurante do Centro", "Peixaria da Praia", "Bistrô da Vila"],
      difficulty: "Fácil"
    },
    {
      icon: <Ship className="w-6 h-6" />,
      title: "Passeios de Barco",
      description: "Conheça as praias isoladas e faça mergulho em águas cristalinas.",
      distance: "Porto do Centro",
      time: "Saídas diárias",
      highlights: ["Praia da Sepultura", "Ilha do Arvoredo", "Canto da Praia"],
      difficulty: "Fácil"
    },
    {
      icon: <TreePine className="w-6 h-6" />,
      title: "Aventuras na Natureza",
      description: "Stand up paddle, caiaque e observação da vida marinha.",
      distance: "Várias praias",
      time: "2-4h",
      highlights: ["SUP na Praia", "Caiaque Ecológico", "Mergulho Livre"],
      difficulty: "Fácil a Moderada"
    }
  ];

  const getDifficultyColor = (difficulty: string) => {
    switch (difficulty) {
      case "Fácil":
        return "bg-green-100 text-green-800 hover:bg-green-200";
      case "Moderada":
        return "bg-yellow-100 text-yellow-800 hover:bg-yellow-200";
      case "Difícil":
        return "bg-red-100 text-red-800 hover:bg-red-200";
      default:
        return "bg-gray-100 text-gray-800 hover:bg-gray-200";
    }
  };

  return (
    <section id="o-que-fazer" className="py-20">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-primary mb-6">
            O Que Fazer em Bombinhas
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Descubra as maravilhas naturais e aventuras que aguardam você na 
            Capital do Mergulho Ecológico. Sua estadia será repleta de experiências inesquecíveis.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
          {activities.map((activity, index) => (
            <Card key={index} className="group hover:shadow-nature transition-all duration-300 hover:-translate-y-2">
              <CardHeader>
                <div className="flex items-center justify-between mb-4">
                  <div className="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                    {activity.icon}
                  </div>
                  <Badge className={getDifficultyColor(activity.difficulty)}>
                    {activity.difficulty}
                  </Badge>
                </div>
                <CardTitle className="text-xl mb-2">{activity.title}</CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-muted-foreground mb-4">{activity.description}</p>
                
                <div className="space-y-2 mb-4">
                  <div className="flex items-center text-sm text-muted-foreground">
                    <MapPin className="w-4 h-4 mr-2" />
                    <span>{activity.distance}</span>
                  </div>
                  <div className="flex items-center text-sm text-muted-foreground">
                    <Clock className="w-4 h-4 mr-2" />
                    <span>{activity.time}</span>
                  </div>
                </div>

                <div className="mb-4">
                  <p className="text-sm font-medium text-primary mb-2">Destaques:</p>
                  <div className="flex flex-wrap gap-1">
                    {activity.highlights.map((highlight, highlightIndex) => (
                      <Badge key={highlightIndex} variant="secondary" className="text-xs">
                        {highlight}
                      </Badge>
                    ))}
                  </div>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>

        <div className="bg-gradient-to-r from-primary/10 to-secondary/10 rounded-3xl p-8 text-center">
          <div className="max-w-2xl mx-auto">
            <Star className="w-12 h-12 text-primary mx-auto mb-4" />
            <h3 className="text-2xl font-bold text-primary mb-4">
              Planeje Sua Aventura
            </h3>
            <p className="text-muted-foreground mb-6">
              Nossa equipe conhece cada cantinho de Bombinhas e está pronta para 
              ajudar você a criar o roteiro perfeito. Desde trilhas secretas até 
              os melhores horários para cada atividade.
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Button size="lg" className="bg-gradient-nature hover:bg-primary/90">
                Solicitar Roteiro Personalizado
              </Button>
              <Button variant="outline" size="lg">
                Download Guia de Bombinhas
              </Button>
            </div>
          </div>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
          <div className="text-center p-6 bg-card rounded-lg border">
            <div className="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
              <Waves className="w-8 h-8 text-primary" />
            </div>
            <h4 className="font-semibold mb-2">39 Praias</h4>
            <p className="text-sm text-muted-foreground">
              Cada uma com características únicas para todos os gostos
            </p>
          </div>
          
          <div className="text-center p-6 bg-card rounded-lg border">
            <div className="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
              <Mountain className="w-8 h-8 text-primary" />
            </div>
            <h4 className="font-semibold mb-2">15+ Trilhas</h4>
            <p className="text-sm text-muted-foreground">
              Desde caminhadas leves até aventuras mais desafiadoras
            </p>
          </div>
          
          <div className="text-center p-6 bg-card rounded-lg border">
            <div className="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
              <TreePine className="w-8 h-8 text-primary" />
            </div>
            <h4 className="font-semibold mb-2">Mata Atlântica</h4>
            <p className="text-sm text-muted-foreground">
              Patrimônio natural preservado com biodiversidade única
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default WhatToDo;