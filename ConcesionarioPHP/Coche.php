<?php
// Coche.php
require_once 'Vehiculo.php';

class Coche extends Vehiculo {
    public function __construct(
        string $marca,
        string $modelo,
        string $color,
        private int $numeroPuertas
    ) {
        parent::__construct($marca, $modelo, $color);
    }

    // Implementación de los métodos abstractos
    public function mover(): void {
        echo "El coche está en movimiento.\n";
    }

    public function detener(): void {
        echo "El coche se ha detenido.\n";
    }

    // Getters y Setters para numeroPuertas
    public function getNumeroPuertas(): int {
        return $this->numeroPuertas;
    }

    public function setNumeroPuertas(int $numeroPuertas): void {
        $this->numeroPuertas = $numeroPuertas;
    }

    // Método para mostrar información específica de Coche
    public function mostrarInformacion(): void {
        parent::mostrarInformacion();
        echo "Número de Puertas: {$this->numeroPuertas}\n";
    }
}
?>
