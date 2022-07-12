<?php
namespace App\Prototype;

class LivroPHPPrototype extends LivroPrototype
{
    public function __construct()
    {
        $this->setAssunto('PHP');
    }

    public function __clone()
    {
        echo "Livro php Clonado \n";
    }

    
}