<?php
require_once 'almacencentral.php';
require_once 'rutaentrega.php';

class GerenteLogistica {
    private $almacenCentral;
    private $rutaEntrega;

    public function __construct($almacenCentral, $rutaEntrega) {
        $this->almacenCentral = $almacenCentral;
        $this->rutaEntrega = $rutaEntrega;
    }

    public function gestionarOperaciones() {
        echo "El gerente de logística está gestionando las operaciones.\n";
        echo "Almacén Central:\n";
        echo "Ubicación: " . $this->almacenCentral->getUbicacion() . "\n";
        echo "Capacidad: " . $this->almacenCentral->getCapacidad() . "\n";
        echo "Ruta de Entrega:\n";
        echo "Nombre: " . $this->rutaEntrega->getNombre() . "\n";
        echo "Distancia: " . $this->rutaEntrega->getDistancia() . " km\n";
    }
}
?>
