<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste de polimorfismo</title>
    </head>
    <body>
        
        <h1>Polimorfismo</h1>
        
        <?php
            include_once 'Planeta.class.php';
            include_once 'Estrela.class.php';
            include_once 'Satelite.class.php';
            include_once 'MovimentoCeleste.class.php';
            
            $terra = new Planeta('Terra');
            $sol = new Estrela('Sol');
            $lua = new Satelite('Lua');
            $movimento = new MovimentoCeleste();
                        
            echo '---------------------------------------'.'<br/>';
            $terra->mensagem();
            echo '---------------------------------------'.'<br/>';
            $sol->mensagem();
            echo '---------------------------------------'.'<br/>';
            $lua->mensagem();
            echo '---------------------------------------'.'<br/>';
            echo '<h2>Movimentos celestres</h2>';
            $movimento->giraEmTorno($terra, $lua);
            echo '---------------------------------------'.'<br/>';
            $movimento->giraEmTorno($sol, $terra);
            echo '---------------------------------------'.'<br/>';
            $movimento->giraEmTorno($sol, $lua);
            
       
        ?>
        <p>
            A Lua em um momento gira em torno da Terra (satélite natural) e ao 
            mesmo tempo gira em torno do Sol (Estrela do Sistema Solar). Assim,
            um mesmo objeto tem dois comportamentos diferentes.
        </p>
        <p>
            A Terra em um momento é rodeada pela Lua e ao mesmo tempo rodeia o 
            Sol. Tendo dois comportamentos diferentes.
        </p>
    </body>
</html>
