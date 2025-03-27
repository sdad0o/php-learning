<?php
//------------ Traits ------------\\
/**
 * Traits provide a way to reuse code in multiple classes without using inheritance.
 * They allow methods to be shared among different classes, promoting code reusability.
 */

// Define an interface that enforces a logging contract
interface Logger
{
    public function log(string $message): void;
}

// Define a trait that provides a reusable logging method
trait Loggable
{
    public function log(string $message): void
    {
        echo "Logging: $message \n";
    }
}

// Define a User class that implements the Logger interface
class User implements Logger
{
    // Use the Loggable trait to include the log method in this class
    use Loggable;

    // Constructor to initialize a user with a name
    public function __construct(public string $name) {}

    /**
     * Simulates saving the user and logs the action.
     * Logging helps keep track of actions and events in an application.
     */
    public function save(): void
    {
        $this->log("User {$this->name} saved");
    }
}

// Create a User instance and save it
$user = new User("Piotr");
$user->save();

/**
 * Note:
 * - Traits are NOT required to be used with interfaces, but it is a good practice to combine them when appropriate.
 * - Traits help avoid code duplication and provide reusable methods across multiple classes.
 */
