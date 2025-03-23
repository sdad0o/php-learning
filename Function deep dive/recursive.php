<?php
/* 
 *  every recursive function need a base case (condition)
 *  if false then call his self
 */

 function faactorial(int $n):int
 {
    echo "$n \n";
    if($n == 0 || $n == 1)
    {
        return 1;
    }
    return $n * faactorial($n - 1);
 }
 var_dump(faactorial(5));