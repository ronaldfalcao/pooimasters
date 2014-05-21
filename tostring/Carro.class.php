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
    
    private $modelo;
    private $cor;
    private $anoFabricacao;
    private $montadora;
            
    function __construct($Modelo, $Cor, $AnoFabricacao, $Montadora) {
            $this->modelo = $Modelo;
            $this->cor = $Cor;
            $this->anoFabricacao = $AnoFabricacao;
            $this->montadora = $Montadora;
    }
    
    function __toString() {
        $saidaString = "----------------------------------------------------".'<br>'.
                       "Modelo ".$this->modelo.'<br>'.
                       "Cor: ".$this->cor.'<br>'.
                       "Ano de Fabricação: ".$this->anoFabricacao.'<br>'.
                       "Montadora: ".$this->montadora.'<br>';
        
        return $saidaString;
    }
}
