<?php
$haystack = "the quick brown fox";
// the variable to search⬇️ the word you want⬇️
$pos = strpos($haystack, "quick");
var_dump($pos); //return the string index
// replace function  
var_dump(str_replace("quick", "lazy", $haystack));
// to find the words that contain five charachter
preg_match_all('/\w{5}/', $haystack, $matches);
var_dump($matches);
