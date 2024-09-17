<?php 

require_once "Funcionario.php";

class Veterinario extends Funcionario {
    public function __construct($nome, $idade, $endereco, $contato) {
        parent::__construct($nome, $idade, $endereco, $contato);
    }

    public function apresentar() {
        return "\nNome: {$this->nome}\nIdade: {$this->idade} anos\nEndereço: {$this->endereco}\nContato: {$this->contato}\nCargo: Veterinário\nSalário: R$ 5.600,00\n";
    }
}


