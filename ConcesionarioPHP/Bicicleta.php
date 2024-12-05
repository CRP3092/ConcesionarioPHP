<?php
// Bicicleta.php

final class Bicicleta {
    private string $marca;
    private string $modelo;
    private string $color;

    public function __construct(string $marca, string $modelo, string $color) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    // Método pedalear específico de Bicicleta
    public function pedalear(): void {
        echo "La bicicleta está siendo pedaleada.\n";
    }

    // Método para mostrar información de la bicicleta
    public function mostrarInformacion(): void {
        echo "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}\n";
    }

    // Getters y setters opcionales
    public function getMarca(): string {
        return $this->marca;
    }

    public function setMarca(string $marca): void {
        $this->marca = $marca;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }
}
?>
