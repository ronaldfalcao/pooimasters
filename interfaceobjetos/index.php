<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testando Interfaces no PHP</title>
    </head>
    <body>
        <?php
            
        // put your code here
        ?>
        <h2>Exemplos utilizando interface</h2>
        <a href="conectaMySQL.php">Conectando com o MySQL</a><br/>
        <a href="conectaPostgre.php">Conectanto com o Postgre</a><br/>
        
        <p>Apesar de estarem em arquivos separados esse exemplo mostra que 
        basta ter a implementação da interface que facilmente podemos
        alterar o banco de dados utilizado pela aplicação apenas alterando o
        objeto e não necessitando alterar as chamadas dos métodos.</p>
        
    </body>
</html>
