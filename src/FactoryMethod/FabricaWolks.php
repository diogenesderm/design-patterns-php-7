<?php

namespace App\FactoryMethod;
use App\FactoryMethod\Product\CarroProductInterface;
use App\FactoryMethod\Product\WolksGol;
use App\FactoryMethod\Product\WolksPolo;

class FabricaWolks implements CarroFactory
{


    public function CriarCarro(string $modeloCarro):CarroProductInterface
    {
        if ($modeloCarro ==  'polo') {
            return new WolksPolo();
        } elseif ($modeloCarro == 'gol') {
            return new WolksGol();
        } else {
            throw new \Exception("Carro {$modeloCarro} não existe");
        }
    }
}