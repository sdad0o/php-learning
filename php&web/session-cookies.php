<?php
// Prevent unnecessary processing for favicon requests
if ($_SERVER['REQUEST_URI'] === '/favicon.ico') {
    exit; // Exit the script if the request is for the favicon
}

// Start the session to track user visits
session_start();

// Check if the request method is POST (form submission)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Set a cookie named 'user' with the submitted name value
    // Cookie expires in 1 hour (3600 seconds)
    setcookie('user', $_POST['name'], time() + 3600, '/');
}

// Check if the 'user' cookie exists
$hasCookie = isset($_COOKIE['user']);

// Define a welcome message based on whether the cookie exists
if (!$hasCookie) {
    $welcomeMessage = "Welcome back, user!"; // Default message if no cookie is found
} else {
    // Use htmlspecialchars to prevent XSS attacks by escaping special characters
    $welcomeMessage = "Welcome back, " . htmlspecialchars($_COOKIE['user']);
}

// Initialize or increment the visit counter stored in the session
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 1; // First visit
} else {
    $_SESSION['visits']++; // Increment visit count
}

// Create a message displaying the number of visits
$visitsMessage = "This is your " . $_SESSION['visits'] . " visit.";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Session and Cookie Demo</title>
</head>

<body>
    <?php if (!$hasCookie): ?>
        <!-- Show the form only if the user has no cookie set -->
        <form method="POST">
            <label>Your name:</label>
            <input type="text" name="name" required />
            <button type="submit">Track</button>
        </form>
    <?php endif; ?>

    <!-- Display the welcome message -->
    <p><?= $welcomeMessage ?></p>

    <!-- Display the visit count message -->
    <p><?= $visitsMessage ?></p>
</body>

</html>