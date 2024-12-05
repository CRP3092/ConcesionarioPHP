<?php
// Moto.php
require_once 'Vehiculo.php';

class Moto extends Vehiculo {
    public function __construct(
        string $marca,
        string $modelo,
        string $color,
        private int $cilindrada
    ) {
        parent::__construct($marca, $modelo, $color);
    }

    // Implementación de los métodos abstractos
    public function mover(): void {
        echo "La moto está en movimiento.\n";
    }

    public function detener(): void {
        echo "La moto se ha detenido.\n";
    }

    // Getters y Setters para cilindrada
    public function getCilindrada(): int {
        return $this->cilindrada;
    }

    public function setCilindrada(int $cilindrada): void {
        $this->cilindrada = $cilindrada;
    }

    // Método para mostrar información específica de Moto
    public function mostrarInformacion(): void {
        parent::mostrarInformacion();
        echo "Cilindrada: {$this->cilindrada} cc\n";
    }
}
?>
