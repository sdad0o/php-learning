<?php

$size = "M";

switch ($size) {
    case "S":
    case "M":
        echo " small or Medium";
        break;
    case "L":
        echo "Large";
        break;
    case "XL":
        echo "Extra Large";
        break;
    default:
        echo "Unknown size";
        break;
}
/////////////
$badAttempts = 2;

switch ($badAttempts) {

    case 3:
        echo "your'e banned";
    case 2:
    case 1:
        //default:
        echo "try again";
        break;
}
