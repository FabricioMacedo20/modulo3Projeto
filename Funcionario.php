<?php 
require_once "Humano.php";

class Funcionario extends Humano {
    public $cargo;
    public $salario;
    

    public function __construct($nome, $idade, $endereco, $contato, $cargo, $salario) {
        parent::__construct($nome, $idade, $endereco, $contato);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function exibirInformacoes() {
        echo "=== Informações do Funcionário ===\n";
        echo "Nome: " . $this->nome . "\n";
        echo "Idade: " . $this->idade . " anos\n";
        echo "Endereço: " . $this->endereco . "\n";
        echo "Contato: " . $this->contato . "\n";
        echo "Cargo: " . $this->cargo . "\n";
        echo "Salário: R$ " . $this->salario . "\n";
    }
}


