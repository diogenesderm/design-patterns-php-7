<?php
namespace App\Factory;

interface CarroFactory {
    public function criarCarro(string $modelo):CarroProduct;
}