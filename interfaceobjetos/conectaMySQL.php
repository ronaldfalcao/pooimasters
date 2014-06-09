<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conectando com o MySQL</title>
    </head>
    <body>
        <?php
            require_once 'conectaMySQL.class.php';
            require_once 'conectaPostgre.class.php';
            
            $banco = new conectaMySQL();
            
            $banco->abre();
            $banco->apaga();
            $banco->atualiza();
            $banco->procura();
            $banco->recupera();
        ?>
        <br/>
        <a href="index.php">Voltar</a>
        
    </body>
</html>
