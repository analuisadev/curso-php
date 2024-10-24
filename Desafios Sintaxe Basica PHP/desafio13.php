<?php

$shoppings = array(70.80, 55, 100, 25.50, 10.99);
$total = 0;
foreach($shoppings as $shopping) {
    $total += $shopping;
}

echo number_format($total, 2);