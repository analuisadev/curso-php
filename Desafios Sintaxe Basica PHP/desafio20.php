<?php

class Livro
{
    public $titulo;
    public $autor;
    public $ano;

    public function __construct($titulo, $autor, $ano)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }

    public function exibirInformacoes(): string {
        return "Título: $this->titulo \nAutor: $this->autor \nAno: $this->ano \n";
    }
}

$livro1 = new Livro("Código Limpo: Habilidades Práticas do Agile Software", "Robert C. Martin", 2009);
$livro2 = new Livro("Entendendo Algoritmos: Um Guia Ilustrado Para Programadores e Outros Curiosos", "Aditya Bhargava", 2017);

echo $livro1->exibirInformacoes();
echo $livro2->exibirInformacoes();