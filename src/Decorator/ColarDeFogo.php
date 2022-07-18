<?php 
namespace App\Decorator;

class ColarDeFogo extends PersonagemDecorator
{
    public function __construct(Personagem $personagem){
        parent::__construct($personagem);
        $this->ataque = 2;
    }
}
 ?>