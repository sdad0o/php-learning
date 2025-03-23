<?php
/*
 *  Higher order functions its take a function call in the parameter 
 */
$users =[
    ['id' => 1 , 'name'=>'Alice' , 'role' => 'admin'],
    ['id' => 2 , 'name'=>'Bob' , 'role' => 'user'],
    ['id' => 3, 'name' => 'martin', 'role' => 'user'],
];

// high order function
function createFilter($key ,$value)
{
    return fn($item) =>$item[$key] == $value;
}

$isAdmin= createFilter('role', 'admin');
$isBob  = createFilter('name', 'Bob');
$admins = array_filter($users , $isAdmin);

var_dump($admins);
var_dump($users,$isBob);

