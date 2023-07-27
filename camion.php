<?php
require_once 'vehiculo.php';

class Camion extends Vehiculo {
    protected $chasis;
    protected $motor;
    protected $carroceria;

    public function __construct($chasis, $motor, $carroceria) {
        $this->chasis = $chasis;
        $this->motor = $motor;
        $this->carroceria = $carroceria;
    }

    public function getChasis() {
        return $this->chasis;
    }

    public function getMotor() {
        return $this->motor;
    }

    public function getCarroceria() {
        return $this->carroceria;
    }
}
?>

