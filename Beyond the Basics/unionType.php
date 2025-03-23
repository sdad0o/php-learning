<?php

declare(static_types=1);

// How to use union types
function processInput(int|float|string $input)
{
    return match(true)
    {
        is_int($input) => "integer :" . ($input*2),
        is_float($input)=> "float :" . round($input,2),
        is_string($input) => "string :" . strtoupper($input),
        default => "Unknown type"
    };
}
$inputs =[42,3.14,"hey",7 , 45.2,"string"];
foreach($inputs as $input)
{
    echo processInput($input) . "\n";
}