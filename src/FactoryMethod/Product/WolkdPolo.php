<?php

namespace App\FactoryMethod\Product;
use App\FactoryMethod\Product\CarroProductInterface;

class WolksPolo implements CarroProductInterface
{
    public function frear()
    {
        echo("Freando Polo");
    }
    
    public function acelerar()
    {
        echo("Acelerando Polo");
    }
    
    public function trocarMarcha()
    {
        echo("Trocando marcha Polo");
    }
    
}