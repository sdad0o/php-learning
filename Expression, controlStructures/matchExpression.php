<?php

/**
 * The `match` expression in PHP 8+ provides a more concise and safer alternative to `switch`.
 * It performs strict comparisons (===) and returns the first matching case.
 * Unlike `switch`, `match` is an expression, meaning it can be assigned to variables or returned.
 */

$statusCode = 404;

// Using match to determine HTTP response message
$message = match ($statusCode) {
    200 => "OK",
    201 => "Created",
    204 => "No Content",
    400 => "Bad Request",
    401 => "Unauthorized",
    403 => "Forbidden",
    404 => "Not Found",
    500 => "Internal Server Error",
    default => "Unknown Status Code",
};

echo "HTTP Status: $statusCode - $message" . PHP_EOL;

// Another example: Matching string values
$role = "admin";
$accessLevel = match ($role) {
    "admin" => "Full Access",
    "editor" => "Edit Access",
    "subscriber" => "Read Access",
    default => "No Access",
};

echo "User Role: $role - $accessLevel" . PHP_EOL;

// Example with expressions inside match
$number = -10;
$type = match (true) {
    $number > 0 => "Positive Number",
    $number < 0 => "Negative Number",
    default => "Zero",
};

echo "Number: $number - $type" . PHP_EOL;
