<?php

class Animal {
    public function fazerSom() {
        echo "O animal está fazendo um som.";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "O cachorro está latindo.";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "O gato está miando.";
    }
}

$catObj = new Gato();
$catObj->fazerSom();
$dogObj = new Cachorro();
$dogObj->fazerSom();