<?php
    class Cachorro{
    	
        //Propriedade est�tica que ser� compartilhada com todas as inst�ncias da classe (objetos)
        public static $tipoAnimal;
        
        //Propriedades espec�ficas de cada inst�ncia (objeto).
        public $nome;
        public $peso;
        
        //Construtor da classe que carregar� as propriedades espec�ficas de cada inst�ncia.
        public function __construct($Nome, $Peso){
            $this->nome = $Nome;
            $this->peso = $Peso;
           
            self::$tipoAnimal = "Cachorro";
            
            echo "Criando objeto...".'<br>';
        }
        
        public static function tipoAnimalClasse(){
        	echo "Esse tipo de Animal � ".self::$tipoAnimal.'<br>';
        }
        
    }
    