<?php
    class Cachorro{
    	
        //Propriedade estática que será compartilhada com todas as instâncias da classe (objetos)
        public static $tipoAnimal;
        
        //Propriedades específicas de cada instância (objeto).
        public $nome;
        public $peso;
        
        //Construtor da classe que carregará as propriedades específicas de cada instância.
        public function __construct($Nome, $Peso){
            $this->nome = $Nome;
            $this->peso = $Peso;
           
            self::$tipoAnimal = "Cachorro";
            
            echo "Criando objeto...".'<br>';
        }
        
        public static function tipoAnimalClasse(){
        	echo "Esse tipo de Animal é ".self::$tipoAnimal.'<br>';
        }
        
    }
    