<?php
// -------- ENCAPSULATION ------------

/**
 * Encapsulation is an object-oriented principle that restricts direct access to an object's data
 * and only allows controlled access through methods.
 * 
 * In this example, the balance is a private property, meaning it cannot be accessed 
 * or modified directly from outside the class. Instead, we provide public methods 
 * to interact with it in a controlled way (getBalance, deposit, and withdraw).
 */

class BankAccount
{
    // Private property: Can only be accessed within this class
    private float $balance = 0;

    // Public method to retrieve the balance (read-only access)
    public function getBalance(): float
    {
        return $this->balance;
    }

    // Public method to deposit money, ensuring only valid amounts are added
    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    // Public method to withdraw money with validation
    public function withdraw(float $amount): bool
    {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            return true; // Withdrawal successful
        }
        return false; // Withdrawal failed (insufficient balance or invalid amount)
    }
}

// Creating a new BankAccount instance
$account = new BankAccount();

// Performing transactions and checking results
var_dump(
    $account->deposit(1000),    // Depositing 1000
    $account->withdraw(500),    // Withdrawing 500 (should succeed)
    $account->getBalance()      // Checking balance (should be 500)
);
