<?php
namespace App\Builder;

class FogueteModeloIIBuilder extends FogueteBuilder
{
    public function buildTanqueCombustivel()
    {
        $this->foguete->setTanqueCombustivel(850);
    }
    
    public function buildModel()
    {
        $this->foguete->setModelo('Foguete Modelo II');
    }
    
    public function buldMotores()
    {
        $this->foguete->setNumeroMotores(2);
    }
    
    public function buildNumeroLugares()
    {
        $this->foguete->setNumeroLugares(6);
    }
    
}