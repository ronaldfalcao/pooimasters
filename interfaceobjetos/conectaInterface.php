<?php
    interface Armazenamento{
        
        public function abre();
        public function atualiza();
        public function apaga();
        public function procura();
        public function recupera();
        
    }

