<?php
// Vehiculo.php

abstract class Vehiculo {
    public function __construct(
        protected string $marca,
        protected string $modelo,
        protected string $color
    ) {}

    // Métodos abstractos que deben ser implementados en las clases hijas
    abstract public function mover(): void;
    abstract public function detener(): void;

    // Getters
    public function getMarca(): string {
        return $this->marca;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function getColor(): string {
        return $this->color;
    }

    // Setters
    public function setMarca(string $marca): void {
        $this->marca = $marca;
    }

    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    // Método mágico para convertir el objeto a una representación legible
    public function __toString(): string {
        return $this->obtenerInformacion();
    }

    // Método mágico para acceder a propiedades no accesibles
    public function __get(string $name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return "La propiedad '{$name}' no existe o no es accesible.";
    }

    // Método para mostrar la información del vehículo
    public function mostrarInformacion(): void {
        echo "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}\n";
    }
}
?>
