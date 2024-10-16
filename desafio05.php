<?php
    $price = 150;
    $discount = 0.1;

    $priceWithDiscount = $price * $discount;
    $finalPrice = $price - $priceWithDiscount;

    echo "O desconto aplicado de um produto com o valor de " . $price . " com 10$ de desconto é de R$: " . $finalPrice;
