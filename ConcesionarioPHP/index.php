<?php
// index.php
require_once 'Coche.php';
require_once 'Moto.php';
require_once 'Camion.php';
require_once 'Bicicleta.php';
require_once 'Tesla.php';

// Crear instancias de las clases
$coche = new Coche('Toyota', 'Corolla', 'Rojo', 4);
$moto = new Moto('Yamaha', 'MT-07', 'Azul', 689);
$camion = new Camion('Mercedes', 'Actros', 'Blanco', 18.5);
$bicicleta = new Bicicleta('Trek', 'Marlin 5', 'Verde');
$tesla = new Tesla("Tesla", "Model S", "Negro", 50);

// Mostrar la información original
$coche->mostrarInformacion();
echo "\n";
$moto->mostrarInformacion();
echo "\n";
$camion->mostrarInformacion();
echo "\n";
$bicicleta->mostrarInformacion();
echo "\n";
$tesla->obtenerInformacion(); 
echo "\n";

// Modificar atributos usando setters
$coche->setColor('Negro');
$coche->setNumeroPuertas(5);

// Mostrar la información actualizada del coche
echo "\nInformación actualizada del coche:\n";
$coche->mostrarInformacion();

// Mostrar estado de la batería
echo $tesla->estadoBateria() . "\n";

// Mover el Tesla
$tesla->mover();
echo $tesla->estadoBateria() . "\n";

// Detener el Tesla
$tesla->detener();

// Cargar la batería
$tesla->cargarBateria(100);
echo $tesla->estadoBateria() . "\n";

// Mover el Tesla de nuevo
$tesla->mover();
echo $tesla->estadoBateria() . "\n";

$concesionario = new Concesionario();

// Mostrar información de los vehículos
$concesionario->mostrarVehiculo($coche);
$concesionario->mostrarVehiculo($moto);
$concesionario->mostrarVehiculo($camion);

?>
