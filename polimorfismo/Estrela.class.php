<?php
    include_once 'InterfaceCorpoCeleste.php';
    
    class Estrela implements CorpoCeleste{
        
        private $nome;
        
        public function getNome(){
            return $this->nome;
        }
        
        function __construct($Nome) {
            $this->nome = $Nome;
        }
        
        public function mensagem() {
            echo 'Eu sou uma Estrela e me chamo '.$this->nome.'<br/>';
        }
        
        public function brilhoProprio() {
            echo 'Eu tenho brilho próprio';
        }

    }

