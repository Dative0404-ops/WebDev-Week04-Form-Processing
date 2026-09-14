<?php
// Start session to access stored session variables
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>User Dashboard</h2>

    <?php if (isset($_SESSION['user_name'])): ?>
        <p>Welcome back, <strong><?php echo htmlspecialchars($_SESSION['user_name']); ?></strong>! Your session data was successfully retrieved.</p>
    <?php else: ?>
        <p>No active session found. Please <a href="index.html">fill out the form</a> first.</p>
    <?php endif; ?>

    <br>
    <a href="index.html">Back to Registration Form</a>
</body>
</html>