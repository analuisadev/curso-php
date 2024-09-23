<?php

echo "======== Bem-vindo(a) ao Screen Match! ========
";

$filmName = "Donzela";
$releaseYear = 2024;
$filmAverage = (9 + 6 + 8 + 7.5 + 5) / 5;
$primePlan = true;
$planInclude = $primePlan || $releaseYear < 2020;

echo $filmName;
