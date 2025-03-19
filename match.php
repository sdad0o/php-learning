<?php
// match is strict comparison operator that compares a value against a list of possible values
// it returns the first match   
// it is similar to switch statement but with more features
// it is available from php 8.0
// it is more concise and less error-prone than switch statement
// it is an expression, so it can be assigned to a variable or returned from a function
// it can be used with any data type 
// it can be used with any comparison operator
// it can be used with any expression
// it can be used with any function
// it can be used with any class
// it can be used with any object
// it can be used with any interface
// it can be used with any trait
/// example 
$status = 404;
$message = match ($status) {
    200 => "OK",
    404 => "Not Found",
    500 => "Internal Server Error",
    default => "Unknown status code",
};
echo $message; // Not Found
