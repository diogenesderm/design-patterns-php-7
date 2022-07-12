<?php
namespace App\FactoryMethod;
use App\FactoryMethod\Product\CarroProductInterface;

interface CarroFactory
{
    public function CriarCarro(string $modeloCarro):CarroProductInterface;
}
 ?>