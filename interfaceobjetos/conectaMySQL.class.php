<?php
    
    require_once 'conectaInterface.php';
    
    class conectaMySQL implements Armazenamento {
        
        public function abre(){
            echo 'Abre o MySQL'.'<br/>';
        }
        
        public function atualiza(){
            echo 'Atualiza com o MySQL'.'<br/>';
        }
        
        public function apaga(){
            echo 'Apagar com o MySQL'.'<br/>';
        }
        
        public function procura(){
            echo 'Procurar com o MySQL'.'<br/>';
        }
        
        public function recupera(){
            echo 'Recuperar com o MySQL'.'<br/>';
        }
        
    }

