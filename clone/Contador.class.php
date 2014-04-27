<?php
    class Contador{
    	
        private $tempoInicial;
        private $tempoFinal;
        
        //Retorna o tempo atual...
        private function montaTempo(){
            $tmp = explode(" ", microtime());
            return $tmp[1];      	
        }
        
        //Chamar no início do script...
        public function iniciarContador(){
        	$this->tempoInicial = $this->montaTempo();
        }
        
        //Chamar no final do script...
        public function finalizarContador(){
            $this->tempoFinal = $this->montaTempo();            
        }
        
        //Mostrar o tempo de execução do script...
        public function mostarTempoDecorrido($mensagemAntes, $mensagemDepois){
        	echo $mensagemAntes.($this->tempoFinal - $this->tempoInicial).$mensagemDepois.'<br>';
        }
        
        
    }