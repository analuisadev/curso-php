<?php

$nota1 = 9;
$nota2 = 10;
$nota3 = 6;
$nota4 = 7;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media >= 7) {
    echo "Aluno(a) aprovado(a) com média: " . $media;
} else {
    echo "Aluno(a) reprovado(a) com média: " . $media;
}
