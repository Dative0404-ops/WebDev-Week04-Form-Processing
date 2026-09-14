<?php
// Start the session at the very top of the file
session_start();

// Retrieve form values using $_POST
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$year_level = $_POST['year_level'] ?? '';

// Check if any required field is empty
if (empty(trim($fullname)) || empty(trim($email)) || empty(trim($year_level))) {
    echo "<h3 style='color: red;'>Error: All fields are required! Please go back and fill out the form completely.</h3>";
    echo "<a href='index.html'>Back to Form</a>";
    exit();
}

// Store submitted values into an associative array
$userData = [
    "Full Name" => $fullname,
    "Email" => $email,
    "Year Level" => $year_level
];

// Save the name into the session variable for multi-page persistence
$_SESSION['user_name'] = $fullname;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submission Result</title>
</head>
<body>
    <h2>Registration Successful!</h2>
    <p>Here are the details retrieved from your submission:</p>

    <ul>
        <?php 
        // Use a foreach loop to display array contents
        foreach ($userData as $key => $value) {
            echo "<li><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</li>";
        }
        ?>
    </ul>

    <br>
    <a href="dashboard.php">Go to Dashboard (Check Session Persistence)</a>
</body>
</html>
