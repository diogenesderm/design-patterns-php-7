<?php

namespace App\Builder;

abstract class FogueteBuilder
{
    protected $foguete;

    public function __construct()
    {
        $this->foguete = new FogueteProduct();
    }

    public function getFoguete():FogueteProduct
    {
        return $this->foguete;
    }

    abstract public function buildTanqueCombustivel();

    abstract public function buildModel();

    abstract public function buldMotores();

    abstract public function buildNumeroLugares();
}