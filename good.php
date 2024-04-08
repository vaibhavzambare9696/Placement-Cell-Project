<?php
session_start();

// Check if the user has already exceeded the maximum login attempts
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

$max_attempts = 100;

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user has reached maximum login attempts
    if ($_SESSION['login_attempts'] >= $max_attempts) {
        $error_message = "Maximum login attempts reached. Please try again later.";
    } else {
        // Check if username and password are correct
        $username = "user"; // Change this to your desired username
        $password = "pass"; // Change this to your desired password

        if ($_POST['username'] === $username && $_POST['password'] === $password) {
            // Username and password are correct
            $_SESSION['logged_in'] = true;
            header("Location: welcome.php"); // Redirect to welcome page
            exit;
        } else {
            // Increment login attempts if username or password is incorrect
            $_SESSION['login_attempts']++;
            $error_message = "Incorrect username or password. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <?php if (isset($error_message)) echo "<p style='color: red;'>$error_message</p>"; ?>
    <form method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
