<?php
require_once 'camion.php';

class CamionFrigorifico extends Camion {
    private $equipoRefrigeracion;

    public function __construct($chasis, $motor, $carroceria, $equipoRefrigeracion) {
        parent::__construct($chasis, $motor, $carroceria);
        $this->equipoRefrigeracion = $equipoRefrigeracion;
    }

    public function getEquipoRefrigeracion() {
        return $this->equipoRefrigeracion;
    }
}
?>
