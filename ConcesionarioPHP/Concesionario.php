<?php
require_once 'Vehiculo.php';

class Concesionario {
    public function mostrarVehiculo(Vehiculo $vehiculo): void {
        echo $vehiculo->obtenerInformacion() . "\n";
    }
}
?>
