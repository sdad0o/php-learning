<?php
// anonymous functions are also called closures, lambda functions, or nameless functions.
// anonymous functions are defined using the keyword function
// anonymous functions can take arguments and return values
// anonymous functions can be called from other functions
// anonymous functions can be called from other files
// anonymous functions can be called from other classes
// anonymous functions can be assigned to variables
// anonymous functions can be passed as arguments to other functions
// anonymous functions can be returned from other functions
// anonymous functions can be used as a value in a variable
// anonymous functions can be used as a value in an array



//we use anonymous functions when we need a throwaway function that we will use only once   

// how to define an anonymous function:
$greet = function ($name) {
    return "Hello $name";
};
echo $greet("Hamza");

/////////////////

$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);
var_dump($squared);


///////////////////////////////////////////////////
// anonymous functions can use variables from the parent scope using the use keyword, this is called a closure
// how to define a closure:
$message = "Bye";
$goodbye = function ($name) use ($message) {
    $message = "$message!";
    return "$message, $name \n";
};
echo $goodbye("Hamza");


echo $message;


// passing by value vs passing by reference ... use(&$message) to pass by reference, this will change the value of the variable in the parent scope..
