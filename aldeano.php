<?php
    class Aldeano {

        function __construct($velocidadRecoleccion='18'){
            $this->velocidadRecoleccion = $velocidadRecoleccion;
        }
        public function Recolectar(Arbusto $arbusto){
            $tiempo = ceil($arbusto->getCantidadAlimento() / $this->velocidadRecoleccion);
        }
    }

    class Arbusto {
        private $cantidadAlimento;
        public function __construct() {
            $this->cantidadAlimento = 125;
        }
    
        public function getAlimento() {
            return $this->cantidadAlimento;
        }
    }

?>