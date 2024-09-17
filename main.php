<?php 


require_once "Animal.php";
require_once "Boi.php"; 
require_once "Coelho.php";
require_once "Macaco.php"; 

require_once "DonosAnimais.php";

require_once "Humano.php";
require_once "Funcionario.php";
require_once "Vendedor.php";
require_once "Veterinario.php";
require_once "Balconista.php"; 

require_once "Produto.php";
require_once "Vendas.php";

while (true) { 
    echo "\nEscolha uma opção:\n";
    echo "1. Animais Cadastrados\n";
    echo "2. Mostrar Funcionários\n";
    echo "3. Aba de Produtos Cadastrados\n";
    echo "4. Produtos Vendidos\n";
    echo "5. Sair\n";
    $opcao = readline("Escolha uma opção: ");
    
    switch ($opcao) {
        case 1:  
            $boi = new Boi("Teodoro", "Nativo", 4, "café", 5.60, "Médio");
            $boi->apresentarBoi(); 
            echo $boi->falar();
        
            
            $donoBoi = new DonosAnimais("Carlos Henrique", 26, "Rua XV, s/n", "42998344782");
            $donoBoi->apresentarDonos();
        
            $coelho = new coelho("Betinho", "Mini lop", 4, "Branco", 2.30, "Pequeno");
            $coelho->apresentarCoelho();
            echo $coelho->falar();
        
            
            $donoCoelho = new DonosAnimais("Joelma Faria", 20, "Rua Zanco True, 23", "42998344782");
            $donoCoelho->apresentarDonos();
        
            
            $macaco = new Macaco("Mclovin", "Macaco-prego", 2, "preto/laranja", 0.6, "Pequeno");
            $macaco->apresentarMacaco();
            echo $macaco->falar();
        
            
            $donoMacaco = new DonosAnimais("Jucelino das Tintas", 50, "Rua Nossas Dores, 147", "42998344782");
            $donoMacaco->apresentarDonos();
            break;

        case 2:  
            echo "\n// FUNCIONÁRIOS //\n";
            $funcionario1 = new Balconista("Fernanda Maria", 19, "Rua Delas", "4298884154762");
            echo $funcionario1->apresentar();
        
            $funcionario2 = new Veterinario("Marcos Assunção", 19, "Rua Delas", "4298884154762");
            echo $funcionario2->apresentar();
        
            $funcionario3 = new Vendedor("João Daminham", 19, "Rua Delas", "4298884154762");
            echo $funcionario3->apresentar();
            break;

        case 3:  
            $produto1 = new Produto("Ração", 20.59, 50);
            $produto1->mostrarProduto();
        
            $produto2 = new Produto("Petisco", 5.25, 250);
            $produto2->mostrarProduto();
        
            $produto3 = new Produto("Bolinha", 3.75, 35);
            $produto3->mostrarProduto();
            break; 

        case 4:  // VENDAS
            $venda1 = new Vendas("Ração", 20.59, 4, "Joelma Faria");
            $venda1->exibirDetalhesVenda();

            $venda2 = new Vendas("Bolinha", 5.25, 2, "Marcos Assunção");
            $venda2->exibirDetalhesVenda();

            $venda3 = new Vendas("Petisco", 5.25, 7, "Mclovin");
            $venda3->exibirDetalhesVenda();
            break; 
            
        case 5:
            echo "Saindo....";
            break 2;

        default:
            echo "Opção inválida, tente novamente.";
            break;   
    }
}
