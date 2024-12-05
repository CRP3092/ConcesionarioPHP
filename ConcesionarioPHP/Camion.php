<?php
// Camion.php
require_once 'Vehiculo.php';

class Camion extends Vehiculo {
    public function __construct(
        string $marca,
        string $modelo,
        string $color,
        private float $capacidadCarga
    ) {
        parent::__construct($marca, $modelo, $color);
    }

    // Implementación de los métodos abstractos
    public function mover(): void {
        echo "El camión está en movimiento.\n";
    }

    public function detener(): void {
        echo "El camión se ha detenido.\n";
    }

    // Getters y Setters para capacidadCarga
    public function getCapacidadCarga(): float {
        return $this->capacidadCarga;
    }

    public function setCapacidadCarga(float $capacidadCarga): void {
        $this->capacidadCarga = $capacidadCarga;
    }

    // Método para mostrar información específica de Camion
    public function mostrarInformacion(): void {
        parent::mostrarInformacion();
        echo "Capacidad de Carga: {$this->capacidadCarga} toneladas\n";
    }
}
?>
