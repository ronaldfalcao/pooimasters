<?php
    require_once 'Pai.class.php';

    class Filho extends Pai{
        
        public function __construct() {
            echo $this->CorCabelo.'<br/>';
            echo $this->tipoCabelo.'<br/>';
            echo $this->corOlhos.'<br/>';
            echo $this->corPele.'<br/>';
        }
        
    }

