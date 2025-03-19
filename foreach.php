<?php
$basket = [
    "apple" => 3,
    "banana" => 4,
];
$total = 0;
foreach ($basket as $item => $quantity) {
    echo "$item: $quantity\n";
    $total += $quantity;
}
echo "Total: $total\n";
