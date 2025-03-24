<?php
/*
 * 
 */
$str = "hello, world";
// to get spciphich charachter
echo $str[0];
// end of the string
echo $str[-1];
// to get the first five charachter for example
echo substr($str,0,5);
// skip first five charachter
echo substr($str,5);
// to upper case
echo strtoupper($str);
// to lower case
echo strtolower($str);
// to upper case the first charachter
echo ucfirst(strtolower($str));
// concatinaion
$greeting = "Hello ," . "world !";
// apend string  
$greeting .="how are you ?";