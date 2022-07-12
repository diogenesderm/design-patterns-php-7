<?php
namespace App\FactoryMethod\Product;

use App\FactoryMethod\Product\CarroProductInterface;

class FiatStrada implements CarroProductInterface
{


    public function frear()
    {
       echo("Freando fiat Strada");
    }
    
    public function acelerar()
    {
       echo("Acelerando fiat Strada");
    }
    
    public function trocarMarcha()
    {
       echo("Trocando marcha fiat Strada");
    }
    
}