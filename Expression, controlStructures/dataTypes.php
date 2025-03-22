<?php
$isStudent = 1;
echo "<br>";
// var_dump() it show the data type and the value
// This is type coercion
var_dump($isStudent, true, $isStudent == true);
// in php every number is True expect ZERO

// here the  type coercion will not work becuse of    ⬇️ 
var_dump($isStudent, true, $isStudent === true);

$scores =[85,"95.5"];
var_dump($scores,$scores[0] + $scores[1]);

// type casting ⬇️
$scores = [85, (int)"95.5"];
var_dump($scores, $scores[0] + $scores[1]);
echo"\n\n";

$scores = [85, (int)"95.5"];
$total = $scores[0]+$scores[1];
var_dump($scores,$total);
echo"Total score is : " . $total ."\n";