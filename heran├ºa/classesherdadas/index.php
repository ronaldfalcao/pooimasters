<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testando Classes herdadas</title>
    </head>
    <body>
        <?php
            require_once 'UmaClasse.class.php';
            require_once 'OutraClasse.class.php';
            
            $umaClasse = new UmaClasse();
            $outraClasse = new OutraClasse();
            
            echo '<h2>Testando as chamadas dos métodos das classes</h2>';
            
            echo '<h3>Chamando os métodos de UmaClasse</h3>';
            $umaClasse->mensagem();
            $umaClasse->mensagemUmaClasse();
            
            echo '<h3>Chamando os métodos de OutraClasse</h3>';
            $outraClasse->mensagem();
            $outraClasse->mensagemOutraClasse();
        // put your code here
        ?>
    </body>
</html>
