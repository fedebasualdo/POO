<?php
require_once 'chasis.php';
require_once 'motor.php';
require_once 'carroceria.php';
require_once 'vehiculo.php';
require_once 'utilitario.php';
require_once 'camion.php';
require_once 'camionfrigorifico.php';
require_once 'equiporefrigeracion.php';
require_once 'gerentelogistica.php';
require_once 'almacencentral.php';
require_once 'rutaentrega.php';

// Crear objetos necesarios
$chasis = new Chasis('Chasis1');
$motor = new Motor('Motor1');
$carroceria = new Carroceria('Carroceria1');

$utilitario = new Utilitario('Utilitario1', 'Rojo', 1000);
$utilitario->cargarMercancia();

$camion = new Camion($chasis, $motor, $carroceria);
$camion->arrancar();
$camion->detener();

$chasis2 = new Chasis('Chasis2');
$motor2 = new Motor('Motor2');
$carroceria2 = new Carroceria('Carroceria2');
$equipoRefrigeracion1 = new EquipoRefrigeracion('Marca1');

$camion2 = new CamionFrigorifico($chasis2, $motor2, $carroceria2, $equipoRefrigeracion1);
$camion2->arrancar();
$camion2->detener();

$almacenCentral = new AlmacenCentral('Ubicacion1', 'Capacidad1');
$rutaEntrega = new RutaEntrega('Ruta1', 100);

$gerenteLogistica = new GerenteLogistica($almacenCentral, $rutaEntrega);
$gerenteLogistica->gestionarOperaciones();
?>
