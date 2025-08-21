import { useState } from "react";
import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { Label } from "@/components/ui/label";
import { Phone, Mail, MessageCircle, Calendar, Clock, Users } from "lucide-react";
import { useToast } from "@/hooks/use-toast";

const Contact = () => {
  const { toast } = useToast();
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    phone: "",
    checkin: "",
    checkout: "",
    guests: "",
    message: ""
  });

  const handleInputChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    const { name, value } = e.target;
    setFormData(prev => ({
      ...prev,
      [name]: value
    }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    
    // Criar mensagem do WhatsApp
    const message = `Olá! Gostaria de fazer uma reserva na Pousada Praia de Bombinhas:

👤 Nome: ${formData.name}
📧 Email: ${formData.email}
📱 Telefone: ${formData.phone}
📅 Check-in: ${formData.checkin}
📅 Check-out: ${formData.checkout}
👥 Hóspedes: ${formData.guests}

💬 Mensagem: ${formData.message}`;

    const whatsappUrl = `https://wa.me/5548999999999?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
    
    toast({
      title: "Redirecionando para WhatsApp",
      description: "Você será redirecionado para finalizar sua reserva via WhatsApp.",
    });
  };

  const contactInfo = [
    {
      icon: <Phone className="w-6 h-6 text-primary" />,
      title: "Telefone",
      info: "(48) 99999-9999",
      action: "tel:+5548999999999"
    },
    {
      icon: <Mail className="w-6 h-6 text-secondary" />,
      title: "E-mail",
      info: "contato@pousadabombinhas.com.br",
      action: "mailto:contato@pousadabombinhas.com.br"
    },
    {
      icon: <MessageCircle className="w-6 h-6 text-primary" />,
      title: "WhatsApp",
      info: "(48) 99999-9999",
      action: "https://wa.me/5548999999999"
    }
  ];

  return (
    <section id="contato" className="py-20 bg-muted/30">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-6">
            Reserve Sua Estadia dos Sonhos
          </h2>
          <p className="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
            Entre em contato conosco e garante sua reserva na natureza exuberante de Bombinhas. 
            Estamos prontos para recebê-lo!
          </p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
          {/* Informações de Contato */}
          <div className="lg:col-span-1 space-y-6">
            <div className="space-y-4">
              {contactInfo.map((contact, index) => (
                <Card key={index} className="bg-card border-border shadow-soft hover:shadow-nature transition-smooth">
                  <CardContent className="p-6">
                    <div className="flex items-center space-x-4">
                      <div className="p-3 bg-muted rounded-lg">
                        {contact.icon}
                      </div>
                      <div>
                        <h3 className="text-lg font-semibold text-foreground">
                          {contact.title}
                        </h3>
                        <a 
                          href={contact.action}
                          className="text-muted-foreground hover:text-primary transition-smooth"
                        >
                          {contact.info}
                        </a>
                      </div>
                    </div>
                  </CardContent>
                </Card>
              ))}
            </div>

            <Card className="bg-gradient-sunset text-white shadow-ocean">
              <CardContent className="p-6">
                <h3 className="text-xl font-bold mb-4">Horário de Atendimento</h3>
                <div className="space-y-2">
                  <div className="flex items-center">
                    <Clock className="w-5 h-5 mr-2" />
                    <span>Segunda a Domingo: 8h às 22h</span>
                  </div>
                  <div className="text-white/90 text-sm mt-4">
                    Respondemos rapidamente via WhatsApp para sua comodidade!
                  </div>
                </div>
              </CardContent>
            </Card>

            <Card className="bg-primary text-primary-foreground shadow-nature">
              <CardContent className="p-6 text-center">
                <h3 className="text-xl font-bold mb-3">Check-in & Check-out</h3>
                <div className="space-y-2 text-sm">
                  <div>Check-in: a partir das 14h</div>
                  <div>Check-out: até as 12h</div>
                </div>
              </CardContent>
            </Card>
          </div>

          {/* Formulário de Reserva */}
          <div className="lg:col-span-2">
            <Card className="bg-card border-border shadow-nature">
              <CardContent className="p-8">
                <h3 className="text-2xl font-bold text-foreground mb-6">
                  Formulário de Reserva
                </h3>
                
                <form onSubmit={handleSubmit} className="space-y-6">
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div className="space-y-2">
                      <Label htmlFor="name">Nome Completo *</Label>
                      <Input
                        id="name"
                        name="name"
                        value={formData.name}
                        onChange={handleInputChange}
                        required
                        placeholder="Seu nome completo"
                      />
                    </div>
                    
                    <div className="space-y-2">
                      <Label htmlFor="email">E-mail *</Label>
                      <Input
                        id="email"
                        name="email"
                        type="email"
                        value={formData.email}
                        onChange={handleInputChange}
                        required
                        placeholder="seu@email.com"
                      />
                    </div>
                  </div>

                  <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div className="space-y-2">
                      <Label htmlFor="phone">Telefone/WhatsApp *</Label>
                      <Input
                        id="phone"
                        name="phone"
                        value={formData.phone}
                        onChange={handleInputChange}
                        required
                        placeholder="(48) 99999-9999"
                      />
                    </div>
                    
                    <div className="space-y-2">
                      <Label htmlFor="checkin">
                        <Calendar className="w-4 h-4 inline mr-2" />
                        Check-in *
                      </Label>
                      <Input
                        id="checkin"
                        name="checkin"
                        type="date"
                        value={formData.checkin}
                        onChange={handleInputChange}
                        required
                      />
                    </div>
                    
                    <div className="space-y-2">
                      <Label htmlFor="checkout">
                        <Calendar className="w-4 h-4 inline mr-2" />
                        Check-out *
                      </Label>
                      <Input
                        id="checkout"
                        name="checkout"
                        type="date"
                        value={formData.checkout}
                        onChange={handleInputChange}
                        required
                      />
                    </div>
                  </div>

                  <div className="space-y-2">
                    <Label htmlFor="guests">
                      <Users className="w-4 h-4 inline mr-2" />
                      Número de Hóspedes *
                    </Label>
                    <Input
                      id="guests"
                      name="guests"
                      type="number"
                      min="1"
                      value={formData.guests}
                      onChange={handleInputChange}
                      required
                      placeholder="Quantas pessoas?"
                    />
                  </div>

                  <div className="space-y-2">
                    <Label htmlFor="message">Mensagem (opcional)</Label>
                    <Textarea
                      id="message"
                      name="message"
                      value={formData.message}
                      onChange={handleInputChange}
                      placeholder="Conte-nos sobre suas necessidades especiais, preferências ou dúvidas..."
                      rows={4}
                    />
                  </div>

                  <Button 
                    type="submit" 
                    variant="hero" 
                    size="lg" 
                    className="w-full text-lg"
                  >
                    <MessageCircle className="w-5 h-5 mr-2" />
                    Enviar Reserva via WhatsApp
                  </Button>
                  
                  <p className="text-sm text-muted-foreground text-center">
                    * Campos obrigatórios. Sua reserva será enviada via WhatsApp para confirmação.
                  </p>
                </form>
              </CardContent>
            </Card>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;