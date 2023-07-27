<?php
class AlmacenCentral {
    private $ubicacion;
    private $capacidad;

    public function __construct($ubicacion, $capacidad) {
        $this->ubicacion = $ubicacion;
        $this->capacidad = $capacidad;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function getCapacidad() {
        return $this->capacidad;
    }
}
?>
