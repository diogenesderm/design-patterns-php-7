<?php
namespace App\Builder;
use App\Builder\FogueteBuilder;

class FabricaFoguetesDirector 
{
    protected $construtorDeFoguetes;

    public function __construct(FogueteBuilder $construtorDeFoguetes)
    {
        $this->construtorDeFoguetes = $construtorDeFoguetes;
    }

    public function getFoguete():FogueteProduct
    {
        return $this->construtorDeFoguetes->getFoguete();
    }

    public function construirFoguete()
    {
        $this->construtorDeFoguetes->buildModel();
        $this->construtorDeFoguetes->buldMotores();
        $this->construtorDeFoguetes->buildNumeroLugares();
        $this->construtorDeFoguetes->buildTanqueCombustivel();
    }
}