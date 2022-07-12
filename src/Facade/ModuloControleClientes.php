<?php
namespace App\Facade;

class ModuloControleClientes
{
    public function buscaCliente(string $cpfcliente):array
    {
        return [
            'nome' => 'Digenes ',
            'telefone' => '8888888',
            'cpf' => '32165498732',
            'email' => 'diogenes @email.com'
        ];
    }
}
