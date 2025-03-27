<?php
// Static class member and singleton 

class MathUtils
{
    // Static property: shared across all instances
    public static float $pi = 3.14159;

    // Static method: can be accessed without creating an instance of the class
    public static function square(float $num): float
    {
        return $num * $num;
    }
}
// Accessing static properties and methods
var_dump(
    MathUtils::$pi,
    MathUtils::square(4)
);


/**
 *   ------------------ Singleton Design Pattern -------------------
 * 
 *   The Singleton pattern ensures that only one instance of a class is created
 *   and provides a global access point to that instance.
 *   
 *   This is useful for managing shared resources, such as database connections,
 *   where multiple instances could lead to conflicts or unnecessary overhead.
 * 
 *   Key Features:
 *   - A private static variable to store the single instance.
 *   - A private constructor to prevent direct instantiation.
 *   - A public static method that returns the single instance, creating it if necessary.
 */

class Connection
{
    private static $instance = null; // Holds the single instance of the class

    private function __construct() {} // Private constructor prevents direct object creation

    public static function singleton()
    {
        if (null == static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}

// Creating (or retrieving) the single instance of Connection
$connection = Connection::singleton();
