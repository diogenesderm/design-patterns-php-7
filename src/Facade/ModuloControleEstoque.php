<?php 
namespace App\Facade;

class ModuloControleEstoque
{
    public function registraRetirada(string $codigoLivro, int $cpfCliente):bool
    {
        return true;
    }

    public function validaEstoque(string $codigoDoLivro):bool
    {
        echo 'Registro de retirada efeturado com sucesso\n';
        return true;
    }

    

}