<?php 
namespace App\Decorator;

class Mago extends Personagem
{
    public function __construct()
    {
        $this->nome = "Mago";
        $this->ataque = 10;
    }
}
 