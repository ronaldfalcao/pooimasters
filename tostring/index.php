<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste para a função __toString</title>
    </head>
    <body>
        <?php
        
            require_once 'Montadora.class.php';
            require_once 'Carro.class.php';
            
            echo "<h2>Testando a função __toString()</h2>".'<br>';
            $montadora = new Montadora("Ford", 1, "Detroit");
            
            $carro = new Carro("Celta", "Preto", 2012, $montadora);
            
            //Retorna o valor montado na função __toString...
            echo $montadora;
            
            //Retorna o valor montado na função __toString...
            echo $carro;
            
            //PS: Perceber que ao imprimir o valor da montadora ele retorna
            //    o mesmo conteúdo de echo $montadora para o atributo montadora
            //    do $carro.
        ?>
    </body>
</html>
