import { Card, CardContent } from "@/components/ui/card";
import { Star, Quote } from "lucide-react";

const Testimonials = () => {
  const testimonials = [
    {
      name: "Maria e João Santos",
      location: "São Paulo, SP",
      rating: 5,
      text: "Que lugar incrível! A pousada é um verdadeiro refúgio na natureza. O café da manhã estava delicioso e o atendimento foi excepcional. A proximidade com as praias e a tranquilidade da mata nos encantaram. Já estamos planejando voltar!",
      stay: "Setembro 2024"
    },
    {
      name: "Ana Clara Silva",
      location: "Rio de Janeiro, RJ",
      text: "Perfeito para quem busca sossego e contato com a natureza. Os chalés são super aconchegantes e limpos. A piscina é um charme e a vista para a mata é relaxante. Recomendo para casais em busca de romance e tranquilidade.",
      rating: 5,
      stay: "Agosto 2024"
    },
    {
      name: "Família Oliveira",
      location: "Curitiba, PR",
      text: "Viajamos com nossas duas crianças e foi uma experiência maravilhosa! A pousada oferece segurança, tem espaço para as crianças brincarem e ainda fica pertinho das praias. O café da manhã com produtos frescos foi o ponto alto. Voltaremos com certeza!",
      rating: 5,
      stay: "Janeiro 2024"
    },
    {
      name: "Carlos Eduardo",
      location: "Florianópolis, SC",
      text: "Localização privilegiada! Em poucos minutos você está nas melhores praias de Bombinhas. A pousada tem aquele clima de casa, o que faz toda diferença. Destaque especial para a área da piscina e a cozinha compartilhada com churrasqueira.",
      rating: 5,
      stay: "Dezembro 2023"
    }
  ];

  const renderStars = (rating: number) => {
    return Array.from({ length: 5 }, (_, index) => (
      <Star
        key={index}
        className={`w-4 h-4 ${
          index < rating ? "fill-yellow-400 text-yellow-400" : "text-gray-300"
        }`}
      />
    ));
  };

  return (
    <section className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-primary mb-6">
            O Que Nossos Hóspedes Dizem
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            A satisfação dos nossos hóspedes é nossa maior recompensa. 
            Veja os depoimentos de quem já viveu momentos especiais conosco.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
          {testimonials.map((testimonial, index) => (
            <Card key={index} className="hover:shadow-nature transition-all duration-300 hover:-translate-y-1">
              <CardContent className="p-6">
                <div className="flex items-start mb-4">
                  <Quote className="w-8 h-8 text-primary/20 mr-3 flex-shrink-0" />
                  <div className="flex-1">
                    <div className="flex items-center mb-2">
                      {renderStars(testimonial.rating)}
                    </div>
                    <p className="text-muted-foreground mb-4 leading-relaxed">
                      "{testimonial.text}"
                    </p>
                    <div className="border-t pt-4">
                      <p className="font-semibold text-primary">{testimonial.name}</p>
                      <p className="text-sm text-muted-foreground">{testimonial.location}</p>
                      <p className="text-xs text-muted-foreground mt-1">
                        Estadia: {testimonial.stay}
                      </p>
                    </div>
                  </div>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>

        <div className="text-center">
          <div className="inline-flex items-center bg-primary/10 rounded-full px-6 py-3 mb-6">
            <div className="flex items-center mr-3">
              {renderStars(5)}
            </div>
            <span className="text-primary font-semibold">
              4.9/5.0 baseado em 127 avaliações
            </span>
          </div>
          <p className="text-muted-foreground">
            Sua opinião é muito importante para nós. Depois da sua estadia, 
            não deixe de compartilhar sua experiência!
          </p>
        </div>
      </div>
    </section>
  );
};

export default Testimonials;