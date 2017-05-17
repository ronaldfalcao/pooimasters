<?php

    require_once 'Complexo.class.php';
    require_once 'Contador.class.php';
    
    echo "<h2>Testando a criação de objetos de forma direta</h2>";
    
    //Cria um contador para computar o tempo decorrido na execução do script e o inicia...
    $contador = new Contador();
    $contador->iniciarContador();
    
    $objeto01 = new Complexo();
    $objeto02 = new Complexo();
    $objeto03 = new Complexo();
    $objeto04 = new Complexo();
    $objeto05 = new Complexo();

    //Finaliza o contador...
    $contador->finalizarContador();
    
    echo "<h3>Propriedades dos objetos</h3>";
    echo "<h4>Objeto 01</h4>";
    echo $objeto01->qualInstancia();
    echo $objeto01->qualValorComplexo();
    echo $objeto01->quantasInstancias();
    echo "<h4>Objeto 02</h4>";
    echo $objeto02->qualInstancia();
    echo $objeto02->qualValorComplexo();
    echo $objeto02->quantasInstancias();
    echo "<h4>Objeto 03</h4>";
    echo $objeto03->qualInstancia();
    echo $objeto03->qualValorComplexo();
    echo $objeto03->quantasInstancias();
    echo "<h4>Objeto 04</h4>";
    echo $objeto04->qualInstancia();
    echo $objeto04->qualValorComplexo();
    echo $objeto04->quantasInstancias();
    echo "<h4>Objeto 05</h4>";
    echo $objeto05->qualInstancia();
    echo $objeto05->qualValorComplexo();
    echo $objeto05->quantasInstancias();
    echo '<br>';
    
    //Exibe o tempo decorrido para criar os objetos.
    $contador->mostarTempoDecorrido("<br><b>Tempo de execução para criar objetos: </b>", " segundos.");
    
    echo "----------------------------------------------------------------------------------------".'<br>';
    
    echo "<h2>Testando a criação de objetos com o clone</h2>";
    
    $contadorNovo = new Contador();
    $contadorNovo->iniciarContador();
    
    $objeto06 = clone $objeto01;
    $objeto07 = clone $objeto02;
    $objeto08 = clone $objeto03;
    $objeto09 = clone $objeto04;
    $objeto10 = clone $objeto05;
    
    //Finaliza o contador...
    $contadorNovo->finalizarContador();
    
    echo "<h3>Propriedades dos objetos</h3>";
    echo "<h4>Objeto 01</h4>";
    echo $objeto06->qualInstancia();
    echo $objeto06->qualValorComplexo();
    echo $objeto06->quantasInstancias();
    echo "<h4>Objeto 02</h4>";
    echo $objeto07->qualInstancia();
    echo $objeto07->qualValorComplexo();
    echo $objeto07->quantasInstancias();
    echo "<h4>Objeto 03</h4>";
    echo $objeto08->qualInstancia();
    echo $objeto08->qualValorComplexo();
    echo $objeto08->quantasInstancias();
    echo "<h4>Objeto 04</h4>";
    echo $objeto09->qualInstancia();
    echo $objeto09->qualValorComplexo();
    echo $objeto09->quantasInstancias();
    echo "<h4>Objeto 05</h4>";
    echo $objeto10->qualInstancia();
    echo $objeto10->qualValorComplexo();
    echo $objeto10->quantasInstancias();
    echo '<br>';
    
    //Exibe o tempo decorrido para criar os objetos.
    $contadorNovo->mostarTempoDecorrido("<br><b>Tempo de execução para criar clones: </b>", " segundos.");