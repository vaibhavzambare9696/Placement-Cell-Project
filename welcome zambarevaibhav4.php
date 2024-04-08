<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] || $_SESSION['username'] !== "zambarevaibhav4@gmail.com") {
    header("Location: welcome zambarevaibhav4.php"); // Redirect to login page if not logged in or incorrect user
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Zambarevaibhav4</title>
</head>
<body>
    <h2>Welcome Zambarevaibhav4</h2>
    <p>Welcome, you have successfully logged in as Zambarevaibhav4!</p>
</body>
</html>
