<?php

$number = 1;
$countsLimit = 100;
while($number <= $countsLimit) {
    $sum = $number + $countsLimit;
    
    if($number % 2 === 0) {
        echo "O número " . $number . " é par " . "\n";
    } else {
        echo $number . "\n";
    }
    
    $number++;
}