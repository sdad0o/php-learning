<?php
// Check if the request method is POST (form submission)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize the submitted email to remove invalid characters
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Display the sanitized email
    echo "The email $email was submitted";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Email Submission Form</title>
</head>

<body>
    <h1>Please submit the form</h1>

    <!-- Form for submitting an email address -->
    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Submit</button>
    </form>
</body>

</html>