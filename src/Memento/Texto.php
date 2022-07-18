<?php 
namespace App\Memento;

use App\Memento\TextoMemento;
use App\Memento\TextoCareTaker;

class Texto
{
    protected string $texto;
    protected $textoCareTaker;

    public function __construct()
    {
        $this->textoCareTaker = new TextoCareTaker();
        $this->texto = "";
    }

    public function escreverTexto(string $texto)
    {
        $this->textoCareTaker->adicionarMemento(new TextoMemento($this->texto));
        $this->texto .= $texto;
    }

    public function desfazerEscrita()
    {
        $this->texto = $this->textoCareTaker->retornaUltmoEstadoSalvo()->getTexto();
    }

    public function retornarTexto():string
    {
        return $this->texto.'<br>';
    }
}



; ?>