<?php
require_once 'vehiculo.php';

class Utilitario extends Vehiculo {
    private $cargaMaxima;

    public function __construct($modelo, $color, $cargaMaxima) {
        parent::__construct($modelo, $color);
        $this->cargaMaxima = $cargaMaxima;
    }

    public function getCargaMaxima() {
        return $this->cargaMaxima;
    }

    public function cargarMercancia() {
        echo "Cargando mercancía en el utilitario.\n";
    }
}
?>

