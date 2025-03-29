<?php

function exeptionHandler(Throwable $exception)
{
    $message = "Uncaught exception (" . get_class($exception) . "):" . 
    $exception->getMessage() . "in file:" . $exception->getFile() . 
    "on line : " . $exception->getLine();
    error_log($message);
    serverError("An unexpected error  occurred . tray again later");
}
function errorHandler(int $errorno , string $errstr ,string $errfile,int $errline):bool
{
    $message = "Error [$errorno] $errstr on line $errline in file $errfile";
    error_log($message);
    serverError("An error occurred . tray again later");
    return true;
}