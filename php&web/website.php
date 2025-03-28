<?php
// Define a variable to hold the page title
$pageTitle = "Dynamic PHP Page";

// Get the current time in hours, minutes, and seconds using the date() function
$currentTime = date("H:i:s");
?>
<html>

<head>
    <!-- Set the title of the page dynamically using the $pageTitle variable -->
    <title><?= $pageTitle ?></title>
</head>

<body>
    <h1>Welcome</h1>
    <!-- Display the current time dynamically using the $currentTime variable -->
    <p>
        The current server time is: <?= $currentTime ?>
    </p>

    <!-- Create a table to display server variables -->
    <table>
        <thead>
            <tr>
                <!-- Table headers for displaying 'Key' and 'Value' -->
                <td><strong>Key</strong></td>
                <td><strong>Value</strong></td>
            </tr>
        </thead>
        <tbody>
            <!-- Iterate through all items in the $_SERVER superglobal array -->
            <!-- This array contains information about headers, paths, and script locations -->
            <?php foreach ($_SERVER as $key => $value): ?>
                <tr>
                    <!-- Display the key of each server variable -->
                    <td><?= $key ?></td>
                    <!-- Display the value of each server variable -->
                    <td><?= $value ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>