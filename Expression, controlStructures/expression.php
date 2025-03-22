<!-- what is an expression: anything that has value   -->
<!-- can mix values, variables and functions and operators -->
<?php

// echo "Hello world";

// variable are defind with "$" and it case sensitive

$name = "Hamza\n";

// Example on concatenation;
echo "Hello " . $name;

// Example on arithmetic operators

$pizzas = 3;
$slicesPerPizza = 8;
$totalSlices = $pizzas * $slicesPerPizza;
echo "total slices: " . $totalSlices . "\n";


// Example on boolean data type (True , False)
$isHungry = true;
echo "hungry? ";
//   expression   True⬇️          False⬇️
echo $isHungry ? "I am hungry" : "not hungry"; //ternary operator