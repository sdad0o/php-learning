<?php
// ------------------ CLASS & OBJECT CONCEPT ------------------

/**
 * A class is a blueprint for creating objects. 
 * Example: Tesla Model Y (class) defines what a Tesla car should be.
 * 
 * An object is an instance of a class. 
 * Example: "My Tesla Model Y" or "Your Tesla Model Y" are objects of the Tesla class.
 * 
 * A class can have:
 * - **Properties (data)** → Variables that store object attributes.
 * - **Methods (functions)** → Define behaviors or actions the object can perform.
 */

class Person
{
    public string $name;
    public int $age;

    // The constructor is called every time a new object is created.
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to introduce a person
    public function introduce(): string
    {
        return "Hi, I am {$this->name} and I am {$this->age} years old.\n";
    }
}

// Creating instances (objects) of the Person class
$person = new Person("Alice", 30);
// Accessing public properties and methods using the -> (arrow) operator
echo $person->introduce();

$person2 = new Person("Bob", 24);
echo $person2->introduce();
