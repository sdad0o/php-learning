<?php
// associative array
$basket = [
//  " key "  => value
    "apple"  =>  3,
    "banana" => 4,
];
// count the items
$total = 0;
foreach ($basket as $item => $quantity) {
    // count of an item
    echo "$item: $quantity\n";
    // add the count to the $total
    $total += $quantity;
}
echo "Total: $total\n";
