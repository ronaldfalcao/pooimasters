<?php
    
    include_once 'InterfaceCorpoCeleste.php';
    
    class Planeta implements CorpoCeleste{
        
        private $nome;
        
        public function getNome(){
            return $this->nome;
        }
                
        function __construct($Nome) {
            $this->nome = $Nome;
        }
        
        public function mensagem() {
            echo 'Eu sou um planeta e me chamo '.$this->nome.'<br/>';
        }
        
        public function brilhoProprio() {
            echo 'Eu não tenho brilho próprio';
        }

    }
    

