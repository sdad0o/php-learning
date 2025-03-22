<?php

$size = "M";

switch ($size) {
    case "S":
    case "M":
        echo " small or Medium";
        break; //to stop the switch
    case "L":
        echo "Large";
        break;
    case "XL":
        echo "Extra Large";
        break;
    // if ther aren't any case is true the default will run 
    default:
        echo "Unknown size";
        break;
}
//----- Another example ------
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
