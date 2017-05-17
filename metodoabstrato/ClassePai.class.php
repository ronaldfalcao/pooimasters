<?php
    abstract class ClassePai{
        
        private $atributo;
        
        public function setAtributo($Valor){
            $this->atributo = $Valor;
        }
        
        public function getAtributo(){
            return $this->atributo;
        }
        
        abstract public function calcula();
        
        
    } 

