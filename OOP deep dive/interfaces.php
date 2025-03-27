<?php

/**
 * ------------------ INTERFACES & ABSTRACT CLASSES ------------------
 *
 * Interfaces define a contract that guarantees that any class implementing the interface
 * will have certain functionality by requiring specific methods to be implemented.
 *
 * - Interfaces themselves do NOT contain any implementation, only method definitions.
 * - They ensure that multiple classes follow a specific required structure.
 * - Interfaces enforce a strict requirement but do NOT provide implementation details.
 *
 * ------------------ ABSTRACT CLASSES ------------------
 * - An abstract class is a class that contains at least one abstract (unimplemented) method.
 * - You CANNOT create an instance of an abstract class directly.
 * - Abstract classes can have both implemented and unimplemented (abstract) methods.
 * - Abstract classes define **requirements** (like interfaces) but also provide **partial implementations**.
 * - Abstract classes allow code reuse, unlike interfaces which only define method signatures.
 */

interface PaymentProcessor
{
    // union type more than one possible type ⬇️
    public function processPayment(float | int $amount): bool;
    public function refundPayment(float | int $amount): bool;
}

/**
 * ------------------ ACCESS MODIFIERS ------------------
 * 1. public    - Accessible from anywhere.
 * 2. protected - Accessible within the class and its child classes.
 * 3. private   - Accessible only within the class where it's defined.
 */

/**
 * ------------------ ABSTRACT CLASS: OnlinePaymentProcessor ------------------
 *
 * This abstract class provides **common functionality** for online payment processors.
 * - Implements the `PaymentProcessor` interface but does not fully define its methods.
 * - Includes both implemented and abstract methods that subclasses must complete.
 * - Ensures that child classes provide the necessary payment execution logic.
 */

abstract class OnlinePaymentProcessor implements PaymentProcessor
{
    // Protected property (accessible in child classes)
    public function __construct(protected string $apiKey) {}

    // Abstract methods: Must be implemented in subclasses.
    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float $amount): bool;
    abstract protected function executeRefund(float $amount): bool;

    /**
     * Processes a payment after validating the API key.
     * Calls an abstract method `executePayment()`, ensuring subclasses define the actual payment logic.
     */
    public function processPayment(float |int $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->executePayment($amount);
    }

    /**
     * Refunds a payment.
     * Calls an abstract method `executeRefund()`, ensuring subclasses define the refund logic.
     */
    public function refundPayment(float | int $amount): bool
    {
        return $this->executeRefund($amount);
    }
}

/**
 * ------------------ CONCRETE CLASSES ------------------
 *
 * These classes extend `OnlinePaymentProcessor` and implement all abstract methods.
 * Unlike abstract classes, **concrete classes** can be instantiated.
 */


// final classes can't be extends ⬇️ || method can be final too  || the final method can't be overriden
final class StripeProcessor extends OnlinePaymentProcessor
{
    // Validates if the API key starts with 'sk_' (Stripe's format)
    protected function validateApiKey(): bool
    {
        return strpos($this->apiKey, 'sk_') === 0;
    }

    protected function executePayment(float $amount): bool
    {
        echo "Processing payment of $amount via Stripe...\n";
        return true;
    }

    protected function executeRefund(float $amount): bool
    {
        echo "Refunding payment of $amount via Stripe...\n";
        return true;
    }
}

class PaypalProcessor extends OnlinePaymentProcessor
{
    // Validates if the API key is exactly 32 characters long (PayPal's format)
    protected function validateApiKey(): bool
    {
        return strlen($this->apiKey) === 32;
    }

    protected function executePayment(float $amount): bool
    {
        echo "Processing payment of $amount via PayPal...\n";
        return true;
    }

    protected function executeRefund(float $amount): bool
    {
        echo "Refunding payment of $amount via PayPal...\n";
        return true;
    }
}

/**
 * ------------------ WHY USE INTERFACES INSTEAD OF ABSTRACT CLASSES? ------------------
 * 
 * 1. **Interfaces enforce a contract, while abstract classes provide implementation**
 *    - Abstract classes can include actual functionality, but interfaces only define method signatures.
 *
 * 2. **A class can only extend ONE abstract class but can implement MULTIPLE interfaces**
 *    - This makes interfaces more flexible when multiple behaviors need to be enforced.
 *
 * 3. **Interfaces promote loose coupling**, making the system easier to modify and extend.
 */

// ------------------ EXAMPLE: CASH PAYMENT PROCESSOR ------------------

/**
 * This class does NOT extend OnlinePaymentProcessor because it does not use an API key.
 * Instead, it simply implements the PaymentProcessor interface.
 */
class CashPaymentProcessor implements PaymentProcessor
{
    public function processPayment(float |int $amount): bool
    {
        echo "Processing cash payment of $amount...\n";
        return true;
    }

    public function refundPayment(float |int $amount): bool
    {
        echo "Refunding cash payment of $amount...\n";
        return true;
    }
}

/**
 * ------------------ ORDER PROCESSOR CLASS ------------------
 *
 * - Demonstrates **Composition over Inheritance**: The `OrderProcessor` class depends on `PaymentProcessor` instead of extending it.
 * - **Loose coupling**: This makes it easier to change implementations (e.g., switch from Stripe to PayPal).
 * - **Easier testing**: This allows mocking the `PaymentProcessor` interface in unit tests.
 */
class OrderProcessor
{
    public function __construct(private PaymentProcessor $paymentProcessor) {}

    public function processOrder(float $amount): void
    {
        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order processed successfully\n";
        } else {
            echo "Order processing failed\n";
        }
    }

    public function refundOrder(float $amount): void
    {
        if ($this->paymentProcessor->refundPayment($amount)) {
            echo "Order refunded successfully\n";
        } else {
            echo "Order refund failed\n";
        }
    }
}

// ------------------ USING THE PAYMENT PROCESSORS ------------------

// Creating payment processor instances with appropriate API keys
$stripeProcessor = new StripeProcessor("sk_valid_api_key");
$paypalProcessor = new PaypalProcessor("valid_paypal_api_key_32charslong");
$cashProcessor = new CashPaymentProcessor();

// Use OrderProcessor with different payment methods
$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);
$cashOrder = new OrderProcessor($cashProcessor);

$stripeOrder->processOrder(100.00);
$paypalOrder->processOrder(150.00);
$cashOrder->processOrder(50.00);

$stripeOrder->refundOrder(25.00);
$paypalOrder->refundOrder(50.00);
$cashOrder->refundOrder(10.00);
