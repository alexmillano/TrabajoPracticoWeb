<?php
    require_once ('recolector.php');
    require_once ('recolectable.php');
    require_once('header.php');
    
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
    private $imagen;

    function __construct($velocidadRecoleccion = 18, $imagen = 'aldeano.jpg'){
        $this->velocidadRecoleccion = $velocidadRecoleccion;
        $this->imagen = $imagen;
    }

    public function recolectar(Recolectable $recolectable) {
        $tiempo = ceil($recolectable->getAlimento() / $this->velocidadRecoleccion);
        echo 'Tarda ' . $tiempo . ' minutos en recolectar todo el alimento';
    }
    public function getImagen() {
        return $this->imagen;
    }
}
$aldeano = new Aldeano();
$arbusto = new Arbusto();

class Pesquero implements Recolector {
    private $velocidadRecoleccion;
    private $imagen;

    function __construct($velocidadRecoleccion = 18, $imagen = 'pesquero.jpg'){
        $this->velocidadRecoleccion = $velocidadRecoleccion;
        $this->imagen = $imagen;
    }

    public function recolectar(Recolectable $recolectable) {
        $tiempo = ceil($recolectable->getAlimento() / $this->velocidadRecoleccion);
        echo '<br>Tarda ' . $tiempo . ' minutos en recolectar todo el alimento';
    }

    public function getImagen() {
        return $this->imagen;
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

$aldeanos = array($aldeano, $pesquero);
function MostrarRecolector($recolector){
    echo '<div class="recolector">';
    echo '<div class="imagen">';
    echo '<img src="imagen/' . $recolector->getImagen() . '" height="300px" alt="Recolector">';
    echo '</div>';
    echo '<div class="texto">';
    if ($recolector instanceof Aldeano) {
        $recolector->recolectar(new Arbusto());
    } elseif ($recolector instanceof Pesquero) {
        $recolector->recolectar(new BancoDePesca());
    }
    echo '</div>';
    echo '</div>';
}

foreach ($aldeanos as $recolector) {
    MostrarRecolector($recolector);
}

require_once('footer.php');
?>