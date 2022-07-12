<?php
namespace App\FactoryMethod;

use App\FactoryMethod\Product\CarroProductInterface;
use App\FactoryMethod\Product\FiatStrada;
use App\FactoryMethod\Product\FiatUno;

class FabricaFiat implements CarroFactory
{
    public function CriarCarro(string $modeloCarro):CarroProductInterface
    {
        if ($modeloCarro == 'uno') {
            return new FiatUno();
        } elseif ($modeloCarro == 'strada') {
            return new FiatStrada();
        } else {
            throw new \Exception("Modelo de carro {$modeloCarro} não existe");
        }
    }
}