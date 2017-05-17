<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carro
 *
 * @author ronaldbf
 */
class Carro {
    
    private $marca;
    private $ano;
    private $combustivel;
    private $cor;
    
    function __construct($Marca, $Ano, $Combustivel, $Cor) {
        echo "O carro acaba de sair da fábrica.".'<br>';
        echo "=================================".'<br>';
        echo "=========++Características++=========".'<br>';
        echo "=================================".'<br>';
        echo "Marca: ".$Marca.'<br>';
        echo "Ano: ".$Ano.'<br>';
        echo "Combistível: ".$Combustivel.'<br>';
        echo "Cor: ".$Cor.'<br>';        
        echo "=================================".'<br>';
    }
    
    function __destruct() {
        echo "O carro acaba de ser reciclado.".'<br>';
    }
    
}
