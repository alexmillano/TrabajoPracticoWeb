<?php
    require_once ('recolector.php');
    require_once ('recolectable.php');
    
class Arbusto implements Recolectable {
    private $cantidadAlimento;
    
    public function __construct($cantidadAlimento = 125) {
        $this->cantidadAlimento = $cantidadAlimento;
    }

    public function getAlimento() {
       return $this->cantidadAlimento;
    }
}

class Aldeano implements Recolector {
    private $velocidadRecoleccion;

    function __construct($velocidadRecoleccion = 18){
        $this->velocidadRecoleccion = $velocidadRecoleccion;
    }

    public function recolectar(Recolectable $recolectable) {
        $tiempo = ceil($recolectable->getAlimento() / $this->velocidadRecoleccion);
        echo 'Se ha tardado ' . $tiempo . ' minutos en recolectar todo el alimento';
    }
}

$aldeano = new Aldeano();
$arbusto = new Arbusto();
$aldeano->recolectar($arbusto);

class Pesquero implements Recolector {
    private $velocidadRecoleccion;

    function __construct($velocidadRecoleccion = 18){
        $this->velocidadRecoleccion = $velocidadRecoleccion;
    }

    public function recolectar(Recolectable $recolectable) {
        $tiempo = ceil($recolectable->getAlimento() / $this->velocidadRecoleccion);
        echo '<br>Se ha tardado ' . $tiempo . ' minutos en Recolectar todo el alimento';
    }
}

class BancoDePesca implements Recolectable {
    private $cantidadAlimento;

    public function __construct($cantidadAlimento = 225) {
        $this->cantidadAlimento = $cantidadAlimento;
    }

    public function getAlimento() {
        return $this->cantidadAlimento;
    }
}

$pesquero = new Pesquero();
$banco = new BancoDePesca();
$pesquero->recolectar($banco);
?>