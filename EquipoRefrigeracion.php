<?php
class EquipoRefrigeracion {
    private $marca;

    public function __construct($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }
}
?>
