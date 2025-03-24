<?php
$name ="Alice";
$age =30;
/**
 *  printf("") function let you define a string with some place holder
 *  like %s it mean you will pass string 
 *  and %d it mean you will pass integer
 * */ 
 printf("%s is %d years old",$name ,$age);

// to sperate the fruits into array 
 $csv = "apple,banana,cherry";
 $fruits = explode(",",$csv);
//  the implode work in the oppisite of explode
 var_dump($fruits,implode(", ",$fruits));

$padded = str_pad("Hello",11,'-',STR_PAD_BOTH);
echo $padded;
// trim to remove the white spaces
var_dump(trim("  hello, world!   "));