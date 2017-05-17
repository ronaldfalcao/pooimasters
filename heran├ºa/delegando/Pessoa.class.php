<?php

    require_once 'Carteira.class.php';
    
    class Pessoa{
        private $carteira;
        
        public function __construct() {
            //Não devemos estender a classe Carteira e sim apenas instanciar
            //um objeto $carteira para ser usada pela classe Pessoa...
            $this->carteira = new Carteira();
        }
        
        public function recebe($valor){
            $this->carteira->guarda($valor);
        }
    }

