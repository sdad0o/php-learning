<!-- what is an expression: anything that has value   -->
<!-- can mix values, variables and functions and operators -->
<?php
// echo "Hello world";

$name = "Hamza";
// echo "Hello $name";
echo "Hello " . $name;

// arithmetic operators

$pizzas = 3;
$slicesPerPizza = 8;
$totalSlices = $pizzas * $slicesPerPizza;
echo "total slices: " . $totalSlices;


// boolean data type
$isHungry = true;
echo "hungry? ";
echo $isHungry ? "I am hungry" : "not hungry";
//