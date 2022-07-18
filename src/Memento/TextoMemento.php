<?php 
namespace App\Memento;

class TextoMemento
{
    protected $estadoTextoMemento;

    public function __construct(string $estadoTextoMemento)
    {
        $this->estadoTextoMemento = $estadoTextoMemento;
    }

    public function getTexto():string
    {
        return $this->estadoTextoMemento;
    }
}