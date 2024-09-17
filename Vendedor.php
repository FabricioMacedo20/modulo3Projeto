<?php 

require_once "Funcionario.php";

class Vendedor extends Funcionario {
    public function __construct($nome, $idade, $endereco, $contato) {
        parent::__construct($nome, $idade, $endereco, $contato);
    }

    public function apresentar() {
        return "\nNome: {$this->nome}\nIdade: {$this->idade} anos\nEndereço: {$this->endereco}\nContato: {$this->contato}\nCargo: Vendedor\nSalário: R$ 2.400,00";
    }
}


