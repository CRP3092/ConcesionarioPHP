<?php
interface VehiculoElectrico {
    public function cargarBateria(int $nivel): void; // Cargar la batería al nivel especificado
    public function estadoBateria(): string;        // Devuelve el estado actual de la batería
}
?>
