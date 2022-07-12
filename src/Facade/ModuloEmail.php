<?php 

namespace App\Facade;

class ModuloEmail 
{
    public function validaServidorDeEmails():bool
    {
        return true;
    }

    public function enviarMensagem(string $nomeRemetente, string $nomeDestinatario, string $emailDestinatario, string $mensagem):bool
    {
        echo 'Email enviado com sucesso \n';
        return true;
    }
}   