<?php 
namespace App\Adapter;

class Pedido{

    protected $numeroPedido;
    protected $valorTotal;
    protected $produtos;

    public function addProduto(string $produto)
    {
        $this->produtos[] = $produto;
        return $this;
    }

    public function setValorTotal($valor)
    {
        $this->valorTotal = $valor;
        return $this;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function setNumeroPedido($numeroPedido)
    {
        $this->numeroPedido = $numeroPedido;
        return $this;
    }

    public function getNumeroPedido()
    {
        return $this->numeroPedido;
    }

    public function getProdutos()
    {
        return $this;
    }
}