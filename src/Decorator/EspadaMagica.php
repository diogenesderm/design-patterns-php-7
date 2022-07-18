<?php 
namespace App\Decorator;

class EspadaMagica extends PersonagemDecorator
{
    public function __construct(Personagem $personagem)
    {
        parent::__construct($personagem);
        $this->ataque = 5;
    }
}
; ?>