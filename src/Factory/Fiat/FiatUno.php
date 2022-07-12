<?php
namespace App\Factory\Fiat;

use App\Factory\CarroProduct;

class FiatUno implements CarroProduct
{


    public function acelerar()
    {
        echo 'Acelerando o carro';
    }
    
    public function frear()
    {
        echo 'Freando o carro';
    }
    
    public function trocarMarcha()
    {
        echo 'Trocando marcha';
    }
    
}

