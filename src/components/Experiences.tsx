import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import beachImage from "@/assets/praia-bombinhas.jpg";
import breakfastImage from "@/assets/cafe-da-manha.jpg";
import { MapPin, Utensils, Waves, Mountain, Camera, Heart } from "lucide-react";

const Experiences = () => {
  const attractions = [
    {
      icon: <Waves className="w-6 h-6 text-secondary" />,
      title: "Praias Paradisíacas",
      description: "Bombas, Bombinhas, Lagoinha e outras praias cristalinas"
    },
    {
      icon: <Mountain className="w-6 h-6 text-primary" />,
      title: "Trilhas Ecológicas",
      description: "Explore a Mata Atlântica preservada em trilhas deslumbrantes"
    },
    {
      icon: <Camera className="w-6 h-6 text-secondary" />,
      title: "Mirantes Espetaculares",
      description: "Vistas panorâmicas inesquecíveis da costa catarinense"
    },
    {
      icon: <Utensils className="w-6 h-6 text-primary" />,
      title: "Gastronomia Local",
      description: "Restaurantes com frutos do mar frescos e culinária regional"
    }
  ];

  return (
    <section id="experiencias" className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-6">
            Experiências Inesquecíveis
          </h2>
          <p className="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
            Descubra as maravilhas que Bombinhas tem a oferecer, desde praias paradisíacas 
            até trilhas pela natureza preservada.
          </p>
        </div>

        {/* Café da Manhã Especial */}
        <div className="mb-16">
          <Card className="overflow-hidden shadow-nature">
            <CardContent className="p-0">
              <div className="grid grid-cols-1 lg:grid-cols-2">
                <div className="p-8 md:p-12 flex flex-col justify-center">
                  <div className="flex items-center mb-4">
                    <Heart className="w-8 h-8 text-primary mr-3" />
                    <h3 className="text-2xl md:text-3xl font-bold text-foreground">
                      Café da Manhã Fresquinho
                    </h3>
                  </div>
                  <p className="text-lg text-muted-foreground mb-6 leading-relaxed">
                    Comece cada dia com energia e sabor! Nosso café da manhã incluso oferece 
                    frutas tropicais frescas, pães artesanais, produtos regionais e muito carinho 
                    em cada detalhe.
                  </p>
                  <div className="space-y-3 mb-6">
                    <div className="flex items-center text-foreground">
                      <span className="w-2 h-2 bg-primary rounded-full mr-3"></span>
                      Frutas tropicais da região
                    </div>
                    <div className="flex items-center text-foreground">
                      <span className="w-2 h-2 bg-secondary rounded-full mr-3"></span>
                      Pães e bolos caseiros
                    </div>
                    <div className="flex items-center text-foreground">
                      <span className="w-2 h-2 bg-primary rounded-full mr-3"></span>
                      Café brasileiro de qualidade
                    </div>
                    <div className="flex items-center text-foreground">
                      <span className="w-2 h-2 bg-secondary rounded-full mr-3"></span>
                      Delícias regionais
                    </div>
                  </div>
                  <Button variant="hero" size="lg" className="w-fit">
                    Reserve e Experimente
                  </Button>
                </div>
                <div className="relative h-[300px] lg:h-full">
                  <img 
                    src={breakfastImage} 
                    alt="Café da manhã da Pousada Praia de Bombinhas"
                    className="w-full h-full object-cover"
                  />
                </div>
              </div>
            </CardContent>
          </Card>
        </div>

        {/* Atrações Próximas */}
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
          <div>
            <Card className="overflow-hidden shadow-ocean">
              <CardContent className="p-0">
                <div className="relative">
                  <img 
                    src={beachImage} 
                    alt="Praias de Bombinhas"
                    className="w-full h-[400px] object-cover"
                  />
                  <div className="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent" />
                  <div className="absolute bottom-6 left-6 text-white">
                    <h4 className="text-xl font-bold mb-2">Praias Cristalinas</h4>
                    <p className="text-white/90">A apenas 700m da pousada</p>
                  </div>
                </div>
              </CardContent>
            </Card>
          </div>

          <div>
            <h3 className="text-2xl md:text-3xl font-bold text-foreground mb-6">
              O Melhor de Bombinhas ao Seu Alcance
            </h3>
            
            <div className="space-y-4">
              {attractions.map((attraction, index) => (
                <Card key={index} className="bg-card border-border shadow-soft hover:shadow-nature transition-smooth">
                  <CardContent className="p-4">
                    <div className="flex items-start space-x-4">
                      <div className="flex-shrink-0 p-2 bg-muted rounded-lg">
                        {attraction.icon}
                      </div>
                      <div>
                        <h4 className="text-lg font-semibold text-foreground mb-2">
                          {attraction.title}
                        </h4>
                        <p className="text-muted-foreground">
                          {attraction.description}
                        </p>
                      </div>
                    </div>
                  </CardContent>
                </Card>
              ))}
            </div>

            <div className="mt-8 p-6 bg-gradient-sunset rounded-xl text-white shadow-ocean">
              <div className="flex items-center mb-3">
                <MapPin className="w-6 h-6 mr-2" />
                <h4 className="text-lg font-semibold">Localização Privilegiada</h4>
              </div>
              <p className="text-white/90">
                No centro de Bombinhas, você terá fácil acesso a restaurantes, lojas e 
                todas as atrações naturais que fazem desta região um destino único.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Experiences;