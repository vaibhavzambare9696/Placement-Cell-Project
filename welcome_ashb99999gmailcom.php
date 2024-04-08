<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] || $_SESSION['username'] !== "ashb99999@gmail.com") {
    header("Location: login.php"); // Redirect to login page if not logged in or incorrect user
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Ashb99999</title>
</head>
<body>
    <h2>Welcome Ashb99999</h2>
    <p>Welcome, you have successfully logged in as Ashb99999!</p>
</body>
</html>
