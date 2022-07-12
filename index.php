<?php



require_once 'vendor/autoload.php';

// use App\Singleton\LogsSingleton;
// $log = LogsSingleton::obterInstancia();

// $fiat = new App\FactoryMethod\FabricaFiat();
// $uno = $fiat->CriarCarro('uno');
// $uno->acelerar();

// $strada = $fiat->CriarCarro('strada');
// $strada->frear();



// use App\Prototype\LivroPHPPrototype;
// $compradores = ['diogenes estevao', 'carlos alberto', 'josiel nunes'];
// $livroPHP = new LivroPHPPrototype();
// $livroPHP->setTitulo('Padroes de Projeto PHP');

// $livros = [];

// foreach ($compradores as $nomeComprador)
// {
//     $livroComprador = clone $livroPHP;
//     $livroComprador->SetNomeTitular($nomeComprador);
//     $livros[] = $livroComprador;
// // }
// print_r($livros);

// use App\Builder\FogueteModeloIBuilder;
// use App\Builder\FogueteModeloIIBuilder;
// use App\Builder\FabricaFoguetesDirector;

// $montadoraDeFoguetesTest1 = new FabricaFoguetesDirector(new FogueteModeloIBuilder());
// $montadoraDeFoguetesTest2 = new FabricaFoguetesDirector(new FogueteModeloIIBuilder());

// $montadoraDeFoguetesTest1->construirFoguete();
// echo $montadoraDeFoguetesTest1->getFoguete();

// $montadoraDeFoguetesTest2->construirFoguete();
// echo $montadoraDeFoguetesTest2->getFoguete();


// $fiat = new FiatFactory();
// $uno = $fiat->criarCarro('uno');
// $uno->acelerar();

// use App\Adapter\IntegracaoErp;
// use App\Adapter\IntegracaoErpAdapter;
// use App\Adapter\Pedido;

// $integracaolegado = new IntegracaoErp();

// $integracaoErpAdapter = new IntegracaoErpAdapter($integracaolegado);
// $token = $integracaoErpAdapter->gerarToken('123456', 'DIOGENES_ESTEVAO');

// $pedidotDeTeste = new Pedido();
// $pedidotDeTeste->setValorTotal(3509)->setNumeroPedido(123456)->addProduto('Xiaomi')->addProduto('Carregador sem fio');
// $pedidoEnviadoComSucesso = $integracaoErpAdapter->enviarPedido($pedidotDeTeste, $token);

// if ($pedidoEnviadoComSucesso) {
//     echo 'Pedido enviado com sucesso<br><br>';
//     print_r($pedidotDeTeste);
// }

use App\Facade\BibliotecaFacade;
use App\Facade\ModuloApiSms;
use App\Facade\ModuloControleClientes;
use App\Facade\ModuloControleEstoque;
use App\Facade\ModuloEmail;

// $moduloControleEstoque = new ModuloControleEstoque();
// $codigoLivro = '123456';
// $cpfCliente  = '986547';

// if (!$moduloControleEstoque->validaEstoque($codigoLivro)) {
//     throw new Exception('Estoque indisponivel');
// }

// $moduloControleEstoque->registraRetirada($codigoLivro, $cpfCliente);

// $moduloSms = new ModuloApiSms();

// $moduloControleClientes = new ModuloControleClientes();

// $moduloEmail = new ModuloEmail();

// $cliente = $moduloControleClientes->buscaCliente($cpfCliente);

// if ($moduloEmail->validaServidorDeEmails()) {
//     $moduloEmail->enviarMensagem('Biblioteca de teste', $cliente['nome'], $cliente['email'], "Aluguel de livro de codigo '{$codigoLivro}' efetuado com sucesso!");
// }

// $token = $moduloSms->geraTokenApi($apiKey, $apiPass);
// $moduloSms->enviaSms($token, 'Biblioteca de Teste', $cliente['nome'], $cliente['telefone'], "Aluguel de libro de codigo '{$codigoLivro}' efetuado com sucesso!");


$bibliotecaFacede = new BibliotecaFacade();
$codigoLivro = '123455';
$cpfCliente = '01276547129';
$efetuouRetirada = $bibliotecaFacede->efetuarRetirada($codigoLivro, $cpfCliente);

if ($efetuouRetirada) {
    $bibliotecaFacede->dispararMensagns($codigoLivro, $cpfCliente, 'chave_pai', 'senha_api');
}
