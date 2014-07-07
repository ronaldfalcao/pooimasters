<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste de métodos abstratos</title>
    </head>
    <body>
        <?php
        
            include_once 'ClasseFilhaA.class.php';
            include_once 'ClasseFilhaB.class.php';
            
            $filhaA = new ClasseFilhaA();
            $filhaA->setAtributo(10);
            echo $filhaA->calcula().'<br/>';
            
            $filhaB = new ClasseFilhaB();
            $filhaB->setAtributo(10);
            echo $filhaB->calcula().'<br/>';
        
        ?>
    </body>
</html>
