<?php 

namespace App\Builder;
use App\Builder\FogueteBuilder;

class FogueteModeloIBuilder extends FogueteBuilder 
{ 
    public function buildTanqueCombustivel()
    {
        $this->foguete->setLitrosCombustivel(1000);
    }
    
    public function buildModel()
    {
       $this->foguete->setModelo('Foguete Modelo 1');
    }
    
    public function buldMotores()
    {
        $this->foguete->setNumeroMotores(3);
    }
    
    public function buildNumeroLugares()
    {
        $this->foguete->setNumeroLugares(8);
    }
    

}