<?php
namespace App\Facade;

use App\Facade\ModuloApiSms;
use App\Facade\ModuloControleEstoque;
use App\Facade\ModuloControleClientes;
use App\Facade\ModuloEmail;
use Exception;

class BibliotecaFacade
{
    public function efetuarRetirada(string $codigoLivro, string $cpfCliente):bool {
        $moduloControleEstoque = new ModuloControleEstoque();
        if (!$moduloControleEstoque->validaEstoque($codigoLivro)) {
            throw new Exception('Estoque indisponivel');
        }

        return $moduloControleEstoque->registraRetirada($codigoLivro, $cpfCliente);
    }

    public function dispararMensagns(string $codigoLivro, string $cpfCliente, string $apiKey, string $apiPass):bool
    {
        $moduloSms = new ModuloApiSms();
        $moduloControleClientes = new ModuloControleClientes();
        $moduloEmail = new ModuloEmail();
        $cliente = $moduloControleClientes->buscaCliente($cpfCliente);

        if ($moduloEmail->validaServidorDeEmails()) {
            $moduloEmail->enviarMensagem('Biblioteca de Teste', $cliente['nome'], $cliente['email'], "Aluguel de livro de código '{$codigoLibro}' efetuado com sucesso! ");
        }
        $token = $moduloSms->geraTokenApi($apiKey, $apiPass);
        $moduloSms->enviaSms($token, 'Biblioteca de Teste', $cliente['nome'], $cliente['telefone'], "Aluguel de libro de codigo '{$codigoLivro}' efetuado com sucesso");
        return true;

    }
}