<?php

    require_once 'Cachorro.class.php';
    
    echo "<h2>Propriedades Estáticas</h2>";
    
    //Instanciando os objetos...
    $cachorro01 = new Cachorro("Rex Único", 10.5);
    $cachorro02 = new Cachorro("Rex I", 8.5);
    $cachorro03 = new Cachorro("Rex II", 9.5);
    $cachorro04 = new Cachorro("Rex III", 12.5);
    
    //Mostrando as propriedades públicas do objeto...
    echo "<h3>Chamando as propriedades públicas de cada objeto instanciado</h3>";
    echo "Nome do cachorro: ".$cachorro01->nome." - Peso: ".$cachorro01->peso."kg".'<br>';
    echo "Nome do cachorro: ".$cachorro02->nome." - Peso: ".$cachorro02->peso."kg".'<br>';
    echo "Nome do cachorro: ".$cachorro03->nome." - Peso: ".$cachorro03->peso."kg".'<br>';
    echo "Nome do cachorro: ".$cachorro04->nome." - Peso: ".$cachorro04->peso."kg".'<br>';
    
    echo "<h3>Chamando a propriedade estática da classe</h3>";
    
    //Chamando direto, pois é uma propriedade pública.
    echo "A propriedade retorna o valor: ".Cachorro::$tipoAnimal.'<br>';
    
    //Chamando pelo método que retorna o valor...
    echo "O método retorna o valor: ".Cachorro::tipoAnimalClasse();
    