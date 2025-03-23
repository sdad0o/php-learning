<?php
/*
    $person = jhon ;
    $client = &$person; create a reference
    that's mean  the $client is an alias of the $person 
    so... any edit you will make for the $client  it will effect to the  $person and the opposite is right
*/
//------ CODE EXAMPLE -------
$person = "jhon";
$client = &$person;

var_dump($person ,$client);
$client = "Robert";
var_dump($person, $client);
$person = "marry";
var_dump($person, $client);
