<?php 
namespace App\Decorator;

class AnelDeFogo extends PersonagemDecorator
{
    public function __construct(Personagem $personagem)
    {
        parent::__construct($personagem);
        $this->ataque = 3;
    }
}
; ?>