import { MessageCircle } from "lucide-react";
import { Button } from "@/components/ui/button";

const WhatsAppFloat = () => {
  const handleWhatsAppClick = () => {
    const message = "Olá! Gostaria de obter mais informações sobre a Pousada Praia de Bombinhas.";
    const whatsappUrl = `https://wa.me/5548999999999?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
  };

  return (
    <div className="fixed bottom-6 right-6 z-50">
      <Button
        onClick={handleWhatsAppClick}
        variant="whatsapp"
        size="lg"
        className="w-16 h-16 rounded-full shadow-ocean animate-float hover:scale-110 transition-spring"
      >
        <MessageCircle className="w-8 h-8" />
      </Button>
      
      {/* Tooltip */}
      <div className="absolute bottom-20 right-0 bg-white text-foreground px-3 py-2 rounded-lg shadow-soft text-sm whitespace-nowrap opacity-0 hover:opacity-100 transition-smooth pointer-events-none">
        Fale conosco no WhatsApp
        <div className="absolute top-full right-4 w-0 h-0 border-l-4 border-r-4 border-t-4 border-l-transparent border-r-transparent border-t-white"></div>
      </div>
    </div>
  );
};

export default WhatsAppFloat;