<?php
class Complexo {
    
    //Propriedade que ser� compartilhada por todas as inst�ncias (objetos)...
    private static $idClasse = 0;

    //Propriedades particulares de cada objeto...
    private $idObjeto;
    private $valorComplexo;

    //Fun��o construtora do objeto que vai fazer o c�lculo de um valor relacionado ao objeto,
    //aguardar dois segundos e incrementar a propriedade $idObjeto...
    public function __construct() {
        //c�digo muito complexo e demorado aqui
        $this->valorComplexo = rand( 1 , 100 );

        sleep( 2 ); //aguarda 2 segundos para ilustrar a demora na constru��o.

        $this->idObjeto = ++self::$idClasse;
        
        echo "Objeto criado...".'<br>';
    }

    //Clona o objeto em quest�o e acresce a propriedade $idObjeto para contextualizar que outro
    //objeto foi criado.
    public function __clone() {
        $this->idObjeto = ++self::$idClasse;
    }

    public function quantasInstancias() {
        echo self::$idClasse , ' inst�ncias foram constru�das at� agora.';
    }

    public function qualInstancia() {
        echo 'Eu sou a inst�ncia n�mero '.$this->idObjeto.'<br>';
    }

    public function qualValorComplexo() {
        echo 'O valor complexo � '.$this->valorComplexo.'<br>';
    }
}