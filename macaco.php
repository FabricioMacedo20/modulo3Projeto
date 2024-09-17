<?php 

require_once "Animal.php";

class Macaco extends Animal {

    public function __construct($nome, $raca, $patas, $cor, $peso, $tamanho) {
        parent::__construct($nome, $raca, $patas, $cor, $peso, $tamanho);
    }

    public function apresentarMacaco() {
        echo "\n// MACACO //\n";
        echo "Nome: " . $this->nome . "\n";
        echo "Raça: " . $this->raca . "\n";
        echo "Quantidade de Patas: " . $this->patas . "\n";
        echo "Cor: " . $this->cor . "\n";
        echo "Peso: " . $this->peso . " kg\n";
        echo "Tamanho: " . $this->tamanho . "\n";
    }

    public function falar() {
        return "Som: uu-uu-uu\n";
    }
}


