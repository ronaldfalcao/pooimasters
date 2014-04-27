<?php

    require_once 'Cachorro.class.php';
    
    echo "<h2>Propriedades Est�ticas</h2>";
    
    //Instanciando os objetos...
    $cachorro01 = new Cachorro("Rex �nico", 10.5);
    $cachorro02 = new Cachorro("Rex I", 8.5);
    $cachorro03 = new Cachorro("Rex II", 9.5);
    $cachorro04 = new Cachorro("Rex III", 12.5);
    
    //Mostrando as propriedades p�blicas do objeto...
    echo "<h3>Chamando as propriedades p�blicas de cada objeto instanciado</h3>";
    echo "Nome do cachorro: ".$cachorro01->nome." - Peso: ".$cachorro01->peso."kg".'<br>';
    echo "Nome do cachorro: ".$cachorro02->nome." - Peso: ".$cachorro02->peso."kg".'<br>';
    echo "Nome do cachorro: ".$cachorro03->nome." - Peso: ".$cachorro03->peso."kg".'<br>';
    echo "Nome do cachorro: ".$cachorro04->nome." - Peso: ".$cachorro04->peso."kg".'<br>';
    
    echo "<h3>Chamando a propriedade est�tica da classe</h3>";
    
    //Chamando direto, pois � uma propriedade p�blica.
    echo "A propriedade retorna o valor: ".Cachorro::$tipoAnimal.'<br>';
    
    //Chamando pelo m�todo que retorna o valor...
    echo "O m�todo retorna o valor: ".Cachorro::tipoAnimalClasse();
    