<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] || $_SESSION['username'] !== "mitalandi@mitacsc.edu.in") {
    header("Location: login.php"); // Redirect to login page if not logged in or incorrect user
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Mitalandi</title>
</head>
<body>
    <h2>Welcome Mitalandi</h2>
    <p>Welcome, you have successfully logged in as Mitalandi!</p>
</body>
</html>
