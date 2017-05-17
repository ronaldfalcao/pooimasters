<?php
    
    require_once 'conectaInterface.php';
    
    class conectaPostgre implements Armazenamento {
        
        public function abre(){
            echo 'Abre o Postgre'.'<br/>';
        }
        
        public function atualiza(){
            echo 'Atualiza com o Postgre'.'<br/>';
        }
        
        public function apaga(){
            echo 'Apagar com o Postgre'.'<br/>';
        }
        
        public function procura(){
            echo 'Procurar com o Postgre'.'<br/>';
        }
        
        public function recupera(){
            echo 'Recuperar com o Postgre'.'<br/>';
        }
        
    }

