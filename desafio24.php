<?php

interface FormaGeometrica {
    public function calcularArea();
    public function calcularPerimetro();
}


class Quadrado implements FormaGeometrica {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }

    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
}


class Circulo implements FormaGeometrica {
    private $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->raio;
    }
}


$quadrado = new Quadrado(5);
echo "Quadrado - Área: " . $quadrado->calcularArea() . "\n";
echo "Quadrado - Perímetro: " . $quadrado->calcularPerimetro() . "\n";

$circulo = new Circulo(3);
echo "Círculo - Área: " . $circulo->calcularArea() . "\n";
echo "Círculo - Perímetro: " . $circulo->calcularPerimetro() . "\n";