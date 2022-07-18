<?php 
namespace App\Memento;

class TextoCareTaker
{
    protected $estadoTexto = [];

    public function adicionarMemento(TextoMemento $textoMemento)
    {
        $this->estadoTexto[] = $textoMemento;
    }

    public function retornaUltmoEstadoSalvo():TextoMemento
    {
        if (empty($this->estadoTexto)) { 
            return null;
        }
        $textoMemento = end($this->estadoTexto);
        unset($this->estadoTexto[sizeof($this->estadoTexto) - 1]);
        return $textoMemento;
    }
}



; ?>