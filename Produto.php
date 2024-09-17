<?php

class Produto {
    public $nomeProduto;
    public $valorProduto;
    public $quantidadeProduto;

    public function __construct($nomeProduto, $valorProduto, $quantidadeProduto) {
        $this->nomeProduto = $nomeProduto;
        $this->valorProduto = $valorProduto;
        $this->quantidadeProduto = $quantidadeProduto;
    }

    public function exibirInformacoes() {
        echo "=== Informações do Produto ===\n";
        echo "Nome: " . $this->nomeProduto . "\n";
        echo "Valor: R$ " . number_format($this->valorProduto, 2, ',', '.') . "\n";
        echo "Quantidade em Estoque: " . $this->quantidadeProduto . "\n";
    }
}

