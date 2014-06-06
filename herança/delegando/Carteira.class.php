<?php
    class Carteira{
        private $valor;
        
        public function __construct() {
            $this->valor = 0;
        }
        
        public function guarda($valor){
            $this->valor += $valor;
            echo 'Valor depositado de R$ '.$valor.'.'.'<br/>';
        }
    }
