<?php
class RutaEntrega {
    private $nombre;
    private $distancia;

    public function __construct($nombre, $distancia) {
        $this->nombre = $nombre;
        $this->distancia = $distancia;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDistancia() {
        return $this->distancia;
    }
}
?>
