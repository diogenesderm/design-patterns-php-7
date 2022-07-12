<?php
namespace App\Builder;
class FogueteProduct 
{
    protected $tanqueCombustivel;
    protected $modelo;
    protected $numeroMotores;
    protected $numeroLugares;
    protected $litrosCombustivel;

    public function __toString():string
    {
        $result  = "Foguete model: {$this->getModelo()}\n";
        $result .= "Litros do tanque: {$this->getLitrosCombustivel()}\n";
        $result .= "Numero de motores: {$this->getNumeroMotores()}\n";
        $result .= "Numero de lugares: {$this->getNumeroLugares()}\n";

        
        return $result;

    }

    public function getLitrosCombustivel():float
    {
        return $this->litrosCombustivel;
    }

    public function setLitrosCombustivel(float $litrosCombustivel): FogueteProduct
    {
        $this->litrosCombustivel = $litrosCombustivel;
        return $this;
    }

    public function getModelo():string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo):FogueteProduct
    {
        $this->modelo = $modelo;
        return $this;
    }

    public function getNumeroMotores():int
    {
        return $this->numeroMotores;
    }

    public function setNumeroMotores(int $numeroMotores): FogueteProduct
    {
        $this->numeroMotores = $numeroMotores;
        return $this;
    }

    public function getNumeroLugares():int
    {
        return $this->numeroLugares;
    }

    public function setNumeroLugares(int $numeroLugares): FogueteProduct
    {
        $this->numeroLugares = $numeroLugares;
        return $this;
    }
}