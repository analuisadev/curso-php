<?php

class Animal {
    public function fazerSom() {
        echo "O animal está fazendo um som.";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "O cachorro está latindo." . "\n";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "O gato está miando." . "\n";
    }
}

$catObj = new Gato();
$catObj->fazerSom();
$dogObj = new Cachorro();
$dogObj->fazerSom();