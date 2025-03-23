<?php
/**
 *  Arrow functions introduced in PHP 7.4.X
 *  1.Arrow function caan have one single expression
 *  2.It use fn keyword 
 */

 $numbers =[1,2,3,4,5];
 $multiplier =3;

 $squared = array_map(function($n) use($multiplier){
    return $n*$multiplier;
 },$numbers);

// can access the out of function scop variable
$squared2 = array_map(
    fn($n) => $n * $multiplier,
    $numbers
);

var_dump($numbers ,$squared ,$squared2);