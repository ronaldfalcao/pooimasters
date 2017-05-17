<?php
    
    include_once 'ClassePai.class.php';

    class ClasseFilhaB extends ClassePai{
        
        public function calcula() {
            return ClassePai::getAtributo()*10;
        }
    
        
    }

