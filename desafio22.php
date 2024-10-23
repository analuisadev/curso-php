<?php

class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar()
    {
        echo "Meu nome é $this->nome e eu tenho $this->idade anos.";
    }
}

class Estudante extends Pessoa
{
    public $curso;

    public function __construct($nome, $idade, $curso)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->curso = $curso;
    }


    public function apresentar()
    {
        echo "Meu nome é $this->nome e eu tenho $this->idade anos e estudo $this->curso";
    }
}

$student = new Estudante("Ana Luisa", 22, "Programador Full-Stack");
$student->apresentar();