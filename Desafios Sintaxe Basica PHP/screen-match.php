<?php

echo "======== Bem-vindo(a) ao Screen Match! ========
";

$filmName = "Donzela";
$releaseYear = $argv[1] ?? 2024;
$filmAverage = (9 + 6 + 8 + 7.5 + 5) / 5;
$primePlan = true;
$planInclude = $primePlan || $releaseYear < 2020;

echo "Nome do filme: " . $filmName . "\n";
echo "Ano: " . $releaseYear . "\n";
echo "Ano de lançamento " . $releaseYear . "\n";

if ($releaseYear > 2024) {
    echo "Esse filme é um lançamento";
} else {
    echo "Esse filme não é um lançamento \n";
}

$classification = match ($filmName) {
    "Donzela" => "Ficção Científica",
    "O Mundo Depois de Nós" => "Ficção Científica",
    "M3GAN" => "Terror",
    default => "Gênero desconhecido."
};

echo "O gênero do filme é: " . $classification;