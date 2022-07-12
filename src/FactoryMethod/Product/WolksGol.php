<?php

namespace App\FactoryMethod\Product;


use App\FactoryMethod\Product\CarroProductInterface;

class WolksGol implements CarroProductInterface
{
    

    public function frear()
    {
        echo("Freando carro gol");
    }
    
    public function acelerar()
    {
        echo("Acelerando carro gol");
    }
    
    public function trocarMarcha()
    {
        echo("Trocando marcha carro gol");
    }
    
}