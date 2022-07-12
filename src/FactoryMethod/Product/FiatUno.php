<?php
namespace App\FactoryMethod\Product;
use App\FactoryMethod\Product\CarroProductInterface;

class FiatUno implements CarroProductInterface
{
    public function frear()
    {
       echo("Freando fiat uno");
    }
    
    public function acelerar()
    {
       echo("acelerar fiat nuno");
    }
    
    public function trocarMarcha()
    {
       echo("trocarMarcha fiat nuno");
    }
    
}