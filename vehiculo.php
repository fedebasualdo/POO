<?php
class Vehiculo {
    protected $modelo;
    protected $color;

    public function __construct($modelo, $color) {
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function arrancar() {
        echo "El vehículo ha sido arrancado.\n";
    }

    public function detener() {
        echo "El vehículo se ha detenido.\n";
    }
}
?>
