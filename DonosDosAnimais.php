<?php

class DonoAnimal {
    public $nome;
    public $idade;
    public $endereco;
    public $contato;

    public function __construct($nome, $idade, $endereco, $contato) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->contato = $contato;
    }

    public function exibirInformacoes() {
        echo "=== Informações do Dono ===\n";
        echo "Nome: " . $this->nome . "\n";
        echo "Idade: " . $this->idade . " anos\n";
        echo "Endereço: " . $this->endereco . "\n";
        echo "Contato: " . $this->contato . "\n";
    }
}

$dono = new DonoAnimal("Carlos", 45, "Rua das Flores, 123", "9999-9999");
$dono->exibirInformacoes();

