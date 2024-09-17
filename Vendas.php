<?php 

require_once "Produto.php";

class Vendas extends Produto {
    public $nomePessoa;

    public function __construct($nomeProduto, $valorProduto, $quantidadeProduto, $nomePessoa) {
        parent::__construct($nomeProduto, $valorProduto, $quantidadeProduto);
        $this->nomePessoa = $nomePessoa;
    }

    public function exibirDetalhesVenda() {
        $totalPreco = $this->quantidadeProduto * $this->valorProduto;
        echo "\n{$this->nomePessoa} comprou {$this->quantidadeProduto} unidade(s) de {$this->nomeProduto} por R$ " . number_format($totalPreco, 2, ',', '.') . " reais.\n";
    }
}
