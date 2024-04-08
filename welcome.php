<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}

// Get the username from the URL parameter
if (isset($_GET['username'])) {
    $username = $_GET['username'];
} else {
    // Handle the case where username is not provided in the URL parameter
    $username = "Guest";
}

// Define welcome messages for each user
$welcome_messages = array(
    "zambarevaibhav4@gmail.com" => "Welcome, Vaibhav!",
    "mitalandi@mitacsc.edu.in" => "Welcome, Mitali!",
    "ashb99999@gmail.com" => "Welcome, Ash!",
    // Add more usernames and corresponding welcome messages as needed
);

// Check if the provided username exists in the array, otherwise default to a generic welcome message
$welcome_message = isset($welcome_messages[$username]) ? $welcome_messages[$username] : "Welcome, Guest!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2><?php echo $welcome_message; ?></h2>
    <!-- Add your welcome message or content here -->
</body>
</html>
