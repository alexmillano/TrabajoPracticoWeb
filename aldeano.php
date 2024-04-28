<?php
    class Aldeano {
        private $velocidadRecoleccion;
        function __construct($velocidadRecoleccion= 18){
            $this->velocidadRecoleccion = $velocidadRecoleccion;
        }
        public function Recolectar(Arbusto $arbusto){
            $tiempo = ceil($arbusto->getAlimento() / $this->velocidadRecoleccion);
            echo 'Se ha tardado ' .$tiempo. ' en Recolectar todo el alimento';
        }
    }

    class Arbusto {
        private $cantidadAlimento;
        public function __construct($cantidadAlimento= 125) {
            $this->cantidadAlimento = $cantidadAlimento;
        }
    
        public function getAlimento() {
           return $this->cantidadAlimento;
            
        }
    }
$aldeano = new Aldeano();
$arbusto = new Arbusto();
$aldeano->Recolectar($arbusto);

    class Pesquero {
        private $velocidadRecoleccion;
        function __construct($velocidadRecoleccion= 18){
            $this->velocidadRecoleccion = $velocidadRecoleccion;
        }
        public function Recolectar(BancoDePesca $banco){
            $tiempo = ceil($banco->getAlimento() / $this->velocidadRecoleccion);
            echo '<br>Se ha tardado ' .$tiempo. ' en Recolectar todo el alimento';
        }
    }
    class BancoDePesca {
        private $cantidadAlimento;
        public function __construct($cantidadAlimento= 225) {
            $this->cantidadAlimento = $cantidadAlimento;
        }

        public function getAlimento() {
        return $this->cantidadAlimento;
            
        }
    }
$pesquero = new Pesquero();
$banco = new BancoDePesca();
$pesquero->Recolectar($banco);
?>