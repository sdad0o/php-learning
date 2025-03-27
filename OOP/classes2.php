<?php
class Person
{
    public string $name;
    public int $age;

    // The constructor is called automatically when a new object is created.
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to introduce a person
    public function introduce(): string
    {
        return "Hi, I am {$this->name} and I am {$this->age} years old.";
    }
}

// ---------------- INHERITANCE ----------------

/**
 * Inheritance allows a class (subclass) to inherit properties and methods from another class (parent class).
 * In this example, Employee inherits from Person, gaining access to its properties and methods.
 */

class Employee extends Person
{
    public function __construct(
        public string $name,
        public int $age,
        public string $position
    ) {}

    // Overriding the introduce method to add job position details
    public function introduce(): string
    {
        // If we override the method completely, we lose the original behavior:
        // return "I work as a {$this->position}.";

        // Instead, we call the parent method to retain the original behavior and extend it:
        return parent::introduce() . " I work as a {$this->position}.";
    }
}

// Creating an Employee object and calling the introduce method
$employee = new Employee("Jerry", 45, "Manager");
echo $employee->introduce() . "\n";

// ---------------- POLYMORPHISM ----------------

/**
 * Polymorphism allows different classes to be treated as instances of the same parent class.
 * Here, both Person and Employee objects can be used interchangeably with the introduce() method.
 */

$people = [
    new Employee("Jerry", 50, "Manager"),
    new Person("Alex", 24)
];

// Function that works with any object of type Person (or its subclasses)
function introduce(Person $person)
{
    echo $person->introduce() . "\n";
}

// Loop through the people array and call introduce() on each object
foreach ($people as $person) {
    introduce($person);
}
