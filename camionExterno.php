<?php
require_once 'camion.php';

class CamionExterno extends Camion {
    private $compania;

    public function __construct($chasis, $motor, $carroceria, $compania) {
        parent::__construct($chasis, $motor, $carroceria);
        $this->compania = $compania;
    }

    public function getCompania() {
        return $this->compania;
    }
}
?>
