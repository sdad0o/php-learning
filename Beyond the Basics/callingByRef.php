<?php
//-------------CALL BY REFERENCE--------------------- 
/**
 *    use case of passing by reference  
 *      1. memory efficient
 *      2. code is faaster
 *      use it if you having some heavy usage
 *      like you have alot of users comes to your website
 *      YOU SHOLD MAKE A TEST TO USE THE REFERENCES BECUSE IT'S
 *      SOMTIMES NOT EFFICIENT !!
 */
// CALL BY REFERENCE
function doubleValue(int &$number): int
{
    $number *= 2;
    return $number;
}
$original =5;
doubleValue($original);
var_dump($original);