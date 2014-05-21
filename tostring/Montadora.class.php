<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Montadora
 *
 * @author ronaldbf
 */
class Montadora {
    
    private $nomeMontadora;
    private $codigoMontadora;
    private $estadoMatriz;
    
    function __construct($NomeMontadora, $CodigoMontadora, $EstadoMontadora) {
        $this->nomeMontadora = $NomeMontadora;
        $this->codigoMontadora = $CodigoMontadora;
        $this->estadoMatriz = $EstadoMontadora;
        
    }

    //Função que será chamada pelo comando echo...
    public function __toString() {
        
        //Retorna uma string...
        $saidaString = "Montadora ".$this->nomeMontadora.'<br>'.
                "===============================".'<br>'.
                "Código: ".$this->codigoMontadora.'<br>'.
                "Estado Matriz: ".$this->estadoMatriz.'<br>';
        
        return $saidaString;
    }
}
