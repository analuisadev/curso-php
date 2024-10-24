<?php

$studentsNotes = [
    "Joseph Miller"=> 9.7,
    "Angeline Jolie" => 10,
    "William Bonner " => 7.7 
];

$average = ($studentsNotes['Angeline Jolie'] + $studentsNotes['Joseph Miller'] + $studentsNotes['William Bonner']) / 3;

foreach($studentsNotes as $student => $studentNote ) {
    echo "Aluno: $student \nNota: $studentNote \n";
}

echo "Média da turma " . number_format($average, 2);