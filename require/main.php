<?php

// include: include and evaluate the specified file, but continue execution
// include 'config.php'; 
// include("config.php");


// require: require and evaluate the specified file, but halt execution if the file is not found
// require 'config.php'; 
// require("config.php");


// require_once: require and evaluate the specified file, but halt execution if the file is already included once
// require_once 'config.php'; 
// require_once("config.php");

require("dbConnect.php");

echo "database $dbHost:$dbName\n";


// we use require when the file is required for the application to run, and include when the file is not required and application can run without it , and require_once when we want to include the file only once in the application, include_once when we want to include the file only once in the application but it is not required for the application to run.