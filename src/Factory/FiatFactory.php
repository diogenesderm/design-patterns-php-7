<?php 
namespace App\Factory;

class FiatFactory implements CarroFactory
{
    public function criarCarro(string $modelo):CarroProduct
    {
        if ($modelo == 'uno') {
                $carro = new Fiat\FiatUno();
        }
        return $carro;
    }
    
}