<?php

    include_once 'ClassePai.class.php';

    class ClasseFilhaA extends ClassePai{
        
        public function calcula() {
            return ClassePai::getAtributo()*2;
        }
    
        
    }

