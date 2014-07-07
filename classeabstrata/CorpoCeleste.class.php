<?php

 class CorpoCeleste {
        
        private $nome;
        public $tipo;
        private $tenho;
        
        public function getNome(){
            return $this->nome;
        }
        
        function __construct($Nome, $Tipo, $Tenho) {
            $this->nome = $Nome;
            $this->tipo = $Tipo;
            $this->tenho = $Tenho;
        }
        
        public function mensagem() {
            switch ($this->tipo) {
                case 1:
                    echo 'Sou uma estrela.'.'<br/>';
                    break;
                case 2:
                    echo 'Sou um planeta.'.'<br/>';
                    break;
                case 3:
                    echo 'Sou um satélite.'.'<br/>';
                    break;

                default:
                    echo 'Não reconheci o corpo celeste'.'<br/>';
                    break;
            }
        }
        
        public function brilhoProprio() {
            switch ($this->tenho) {
                case 0:
                    echo 'Não tenho brilho próprio.'.'<br/>';
                    break;
                case 1:
                    echo 'Tenho brilho próprio.'.'<br/>';
                    break;

                default:
                    echo 'Não reconheci o corpo celeste'.'<br/>';
                    break;
            }
        }

    }
