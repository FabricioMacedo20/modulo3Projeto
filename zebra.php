<?php 

    require_once "Animal.php";
    
    class Zebra extends Animal {

        public function __construct($nome, $raca, $patas, $cor, $peso, $tamanho) {
            parent::__construct($nome, $raca, $patas, $cor, $peso, $tamanho);
            
        }

        public function apresentarCoelho() {
            echo "\n // ZEBRA // \n nome: {$this->nome} \n Raça: {$this->raca} \n patas: {$this->patas} \n Cor: {$this->cor} \n Peso: {$this->peso}kg \n Tamanho: {$this->tamanho} \n ";
        }

        
        public function falar() {
            echo "Canto: whah-whah-whah \n " ;
        }
    }