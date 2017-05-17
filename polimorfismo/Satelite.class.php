<?php
    
    include_once 'InterfaceCorpoCeleste.php';
    
    class Satelite implements CorpoCeleste{
        
        private $nome;
        
        public function getNome(){
            return $this->nome;
        }
        
        function __construct($Nome) {
            $this->nome = $Nome;
        }
        
        public function mensagem() {
            echo 'Eu sou um Satélite e me chamo '.$this->nome.'<br/>';
        }
        
        public function brilhoProprio() {
            echo 'Eu não tenho brilho próprio';
        }
        
        
    }

