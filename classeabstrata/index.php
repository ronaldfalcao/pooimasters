<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste de Classes abstratas</title>
    </head>
    <body>
        <?php
            include_once 'Estrela.class.php';
            include_once 'Planeta.class.php';
            include_once 'Satelite.class.php';
            
            $sol = new Estrela('Sol', 1, 1);
            $terra = new Planeta('Terra', 2, 0);
            $lua = new Satelite('Lua', 3, 0);
            
            echo '<h2>Corpos Celestes</h2>';
            echo 'Meu nome é '.$sol->getNome().'<br/>';
            $sol->mensagem();
            $sol->brilhoProprio();
            echo '-----------------------------------------'.'<br/>';
            echo 'Meu nome é '.$terra->getNome().'<br/>';
            $terra->mensagem();
            $terra->brilhoProprio();
            echo '-----------------------------------------'.'<br/>';
            echo 'Meu nome é '.$lua->getNome().'<br/>';
            $lua->mensagem();
            $lua->brilhoProprio();
            echo '-----------------------------------------'.'<br/>';
            
        ?>
    </body>
</html>
