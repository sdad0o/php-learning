<?php
//functions are reusable code blocks
//functions are defined using the keyword function
//functions can take arguments and return values
//functions can be called from other functions
//functions can be called from other files
//functions can be called from other classes
// how to define a function:
// function functionName() {
//     // code block
// }    // function definition ends with a semicolon
// how to call a function:
// functionName();







function greet($name)
{
    return "Hello $name";
}
echo greet("Hamza");

/////////////////////////////////////////////////

function greetWithTime($name, $time = "day")
{
    return "Good $time $name!";
}
echo greetWithTime("Hamza");
echo greetWithTime("Hamza", "morning");
