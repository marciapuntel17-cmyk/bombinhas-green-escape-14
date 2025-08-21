import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { MapPin, Clock, Car, Plane } from "lucide-react";
const Location = () => {
  const locationFeatures = [{
    icon: <MapPin className="w-6 h-6 text-primary" />,
    title: "Centro de Bombinhas",
    description: "Localizada estrategicamente no coração da cidade"
  }, {
    icon: <Clock className="w-6 h-6 text-secondary" />,
    title: "700m das Praias",
    description: "Caminhada de 8 minutos até as praias principais"
  }, {
    icon: <Car className="w-6 h-6 text-primary" />,
    title: "Fácil Acesso",
    description: "Próximo a restaurantes, comércio e atrações"
  }, {
    icon: <Plane className="w-6 h-6 text-secondary" />,
    title: "Como Chegar",
    description: "1h30 do Aeroporto de Florianópolis"
  }];
  return <section id="localizacao" className="py-20">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-6">
            Localização Privilegiada
          </h2>
          <p className="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
            Estrategicamente posicionada no centro de Bombinhas, nossa pousada oferece 
            o equilíbrio perfeito entre tranquilidade e conveniência.
          </p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">
          {/* Informações de Localização */}
          <div className="space-y-6">
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
              {locationFeatures.map((feature, index) => <Card key={index} className="bg-card border-border shadow-soft hover:shadow-nature transition-smooth">
                  <CardContent className="p-6 text-center">
                    <div className="flex justify-center mb-4">
                      {feature.icon}
                    </div>
                    <h3 className="text-lg font-semibold text-foreground mb-2">
                      {feature.title}
                    </h3>
                    <p className="text-muted-foreground text-sm">
                      {feature.description}
                    </p>
                  </CardContent>
                </Card>)}
            </div>

            <Card className="bg-gradient-nature text-white shadow-nature">
              <CardContent className="p-8">
                <h3 className="text-2xl font-bold mb-4">Por que Escolher Nossa Localização?</h3>
                <div className="space-y-3">
                  <div className="flex items-center">
                    <span className="w-2 h-2 bg-white rounded-full mr-3"></span>
                    <span>Tranquilidade da Mata Atlântica</span>
                  </div>
                  <div className="flex items-center">
                    <span className="w-2 h-2 bg-white rounded-full mr-3"></span>
                    <span>Proximidade das principais praias</span>
                  </div>
                  <div className="flex items-center">
                    <span className="w-2 h-2 bg-white rounded-full mr-3"></span>
                    <span>Acesso fácil a restaurantes e comércio</span>
                  </div>
                  <div className="flex items-center">
                    <span className="w-2 h-2 bg-white rounded-full mr-3"></span>
                    <span>Estacionamento seguro disponível</span>
                  </div>
                </div>
              </CardContent>
            </Card>

            <Card className="bg-muted border-border shadow-soft">
              <CardContent className="p-6">
                <h4 className="text-xl font-semibold text-foreground mb-4">Endereço</h4>
                <p className="text-muted-foreground mb-4">
                  Rua das Garoupas, 123<br />
                  Centro - Bombinhas, SC<br />
                  CEP: 88215-000
                </p>
                <div className="space-y-2 text-sm text-muted-foreground">
                  <div className="flex justify-between">
                    <span>Praia de Bombinhas:</span>
                    <span className="font-medium">700m (8 min caminhando)</span>
                  </div>
                  <div className="flex justify-between">
                    <span>Praia de Bombas:</span>
                    <span className="font-medium">1,2km (15 min caminhando)</span>
                  </div>
                  <div className="flex justify-between">
                    <span>Centro da cidade:</span>
                    <span className="font-medium">300m (4 min caminhando)</span>
                  </div>
                </div>
              </CardContent>
            </Card>
          </div>

          {/* Mapa */}
          <div className="h-[500px] lg:h-full min-h-[400px]">
            <Card className="h-full shadow-ocean overflow-hidden">
              <CardContent className="p-0 h-full relative">
                {/* Mapa do Google Maps integrado */}
                <div className="w-full h-full rounded-lg overflow-hidden">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.842!2d-48.485!3d-27.14!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDgwJzI2LjAiUyA0OMKwMjknMDYuMCJX!5e0!3m2!1spt-BR!2sbr!4v1600000000000!5m2!1spt-BR!2sbr&markers=color:red%7Clabel:P%7C-27.14,-48.485" width="100%" height="100%" style={{
                  border: 0,
                  minHeight: '400px'
                }} allowFullScreen={true} loading="lazy" referrerPolicy="no-referrer-when-downgrade" title="Localização da Pousada Praia de Bombinhas" className="rounded-lg" />
                </div>
                
                {/* Overlay com informações */}
                <div className="absolute top-4 left-4 bg-white/95 backdrop-blur-sm rounded-lg p-4 max-w-xs shadow-lg">
                  <div className="flex items-center mb-2">
                    <MapPin className="w-5 h-5 text-primary mr-2" />
                    <span className="font-semibold text-primary">Nossa Localização</span>
                  </div>
                  <p className="text-sm text-muted-foreground mb-3">
                    Centro de Bombinhas, cercada pela Mata Atlântica
                  </p>
                  <div className="space-y-1 text-xs text-muted-foreground">
                    <div>🏖️ 700m das principais praias</div>
                    <div>🏪 100m do centro comercial</div>
                    <div>🚗 Fácil acesso de carro</div>
                  </div>
                </div>

                {/* Botões de ação */}
                <div className="absolute bottom-4 right-4 space-y-2">
                  <Button size="sm" className="bg-white/90 text-primary hover:bg-white shadow-lg" onClick={() => window.open('https://maps.google.com/?q=Pousada+Praia+de+Bombinhas,+Bombinhas,+SC', '_blank')}>
                    Abrir no Google Maps
                  </Button>
                  <Button size="sm" variant="outline" className="bg-white/90 hover:bg-white shadow-lg" onClick={() => window.open('https://waze.com/ul?q=Pousada+Praia+de+Bombinhas,+Bombinhas,+SC', '_blank')}>
                    Abrir no Waze
                  </Button>
                </div>
              </CardContent>
            </Card>
          </div>
        </div>
      </div>
    </section>;
};
export default Location;