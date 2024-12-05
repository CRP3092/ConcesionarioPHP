<?php
require_once 'Vehiculo.php';
require_once 'VehiculoElectrico.php';

class Tesla extends Vehiculo implements VehiculoElectrico {
    private int $capacidadBateria;

    public function __construct(string $marca, string $modelo, string $color, int $capacidadBateria = 100) {
        parent::__construct($marca, $modelo, $color);
        $this->capacidadBateria = $capacidadBateria;
    }

    public function cargarBateria(int $nivel): void {
        if ($nivel < 0 || $nivel > 100) {
            echo "Nivel de batería no válido. Debe estar entre 0 y 100.\n";
            return;
        }
        $this->capacidadBateria = $nivel;
        echo "La batería ha sido cargada al {$nivel}%.\n";
    }

    public function estadoBateria(): string {
        return "El estado actual de la batería es del {$this->capacidadBateria}%.";
    }

    public function mover(): void {
        if ($this->capacidadBateria > 0) {
            echo "El Tesla está en movimiento.\n";
            $this->capacidadBateria -= 10; // Reducir batería al moverse
        } else {
            echo "La batería está vacía. Carga el Tesla para moverte.\n";
        }
    }

    public function detener(): void {
        echo "El Tesla se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Capacidad de batería: {$this->capacidadBateria}%";
    }
}
?>
