<?php

function greet(string $name ,string $greeting = "Hello", bool $shout = false):string
{
    $message ="$greeting, $name !";
    return $shout?strtoupper($message):$message;
}
echo greet("Alice") . "\n";
echo greet("Alice", "hi") . "\n";
echo greet("Alice","hey" ,true) . "\n";
// named argument
echo greet(name: "Divid" , shout: false) . "\n";
