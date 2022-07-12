<?php
namespace App\Singleton;

class LogsSingleton
{
    protected static $instancia;

    private function __construct()
    {


    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }
    
    public function gravarLog(array $dados)
    {
        $nomeArquivo ='logs.txt';
        $logsAnteriotes = [];

        if(filesize($nomeArquivo) > 0){
            $conteudoDoArquivo = file_get_contents($nomeArquivo);
            $logsAnteriotes = json_decode($conteudoDoArquivo, true);
        }

        $logsAnteriotes[] = $dados;

        $arquivo = fopen($nomeArquivo, 'w');
        fwrite($arquivo, json_encode($logsAnteriotes));
        fclose($arquivo);
    }

    public static function obterInstancia():self
    {
        if (empty(self::$instancia)) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }
}