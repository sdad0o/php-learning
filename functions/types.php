<?php

declare(strict_types=1); // strict mod e requirement
// types of functions in PHP added in PHP 5 
// strict typing added in PHP 7
function add(int $a, int $b): int   //: int is the return type
{
    return $a + $b;
}
// echo add('4', 2);
var_dump(add(6, 2));
