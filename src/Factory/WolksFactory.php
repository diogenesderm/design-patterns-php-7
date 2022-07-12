<?php
namespace App\Factory;

use App\Factory\CarroFactory;
use App\Factory\Wolks\WolksGol;

class WolksFactory implements CarroFactory
{


    public function criarCarro(string $modelo):CarroProduct
    {
        if ($modelo == 'gol' ) {
            return new WolksGol();
        }
    }
}