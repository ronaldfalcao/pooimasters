<?php
class Complexo {
    
    //Propriedade que será compartilhada por todas as instâncias (objetos)...
    private static $idClasse = 0;

    //Propriedades particulares de cada objeto...
    private $idObjeto;
    private $valorComplexo;

    //Função construtora do objeto que vai fazer o cálculo de um valor relacionado ao objeto,
    //aguardar dois segundos e incrementar a propriedade $idObjeto...
    public function __construct() {
        //código muito complexo e demorado aqui
        $this->valorComplexo = rand( 1 , 100 );

        sleep( 2 ); //aguarda 2 segundos para ilustrar a demora na construção.

        $this->idObjeto = ++self::$idClasse;
        
        echo "Objeto criado...".'<br>';
    }

    //Clona o objeto em questão e acresce a propriedade $idObjeto para contextualizar que outro
    //objeto foi criado.
    public function __clone() {
        $this->idObjeto = ++self::$idClasse;
    }

    public function quantasInstancias() {
        echo self::$idClasse , ' instâncias foram construídas até agora.';
    }

    public function qualInstancia() {
        echo 'Eu sou a instância número '.$this->idObjeto.'<br>';
    }

    public function qualValorComplexo() {
        echo 'O valor complexo é '.$this->valorComplexo.'<br>';
    }
}