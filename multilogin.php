<?php
session_start();

// Define multiple users with their respective usernames and passwords
$users = array(
    "zambarevaibhav4@gmail.com" => "vaibhav@123",
    "mitalandi@mitacsc.edu.in" => "mit@123",
    "ashb99999@gmail.com" => "ashu@123"
);

// Check if the user has already exceeded the maximum login attempts
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

$max_attempts = 100; // Change the maximum login attempts if needed

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user has reached maximum login attempts
    if ($_SESSION['login_attempts'] >= $max_attempts) {
        $error_message = "Maximum login attempts reached. Please try again later.";
    } else {
        $entered_username = $_POST['user_name'];
        $entered_password = $_POST['user_pass'];

        // Check if username exists in the list of users and if the password matches
        if (array_key_exists($entered_username, $users) && $users[$entered_username] === $entered_password) {
            // Username and password are correct
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $entered_username;
            header("Location: welcome_" . str_replace(array("@", "."), "", $entered_username) . ".php"); // Redirect to user-specific welcome page
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
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="main">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div id="formHeader">
                    <h3 class="text-danger" style="font-family: Kurale"><b>Welcome Placement cell</b></h3>
                </div>
                <div class="fadeIn first">
                    <img src="https://ssmobile.co.in/ssweb/images/avatar.jpg" id="icon" alt="User Icon" />
                </div>
                <!-- Login Form -->
                <?php if (isset($error_message)) echo "<p style='color: red;'>$error_message</p>"; ?>
                <form method="post">
                    <input type="text" id="login" class="fadeIn second" name="user_name" placeholder="Username" required="">
                    <input type="password" id="password" class="fadeIn third" name="user_pass" placeholder="Password" required="">
                    <input type="submit" class="fadeIn fourth" value="Login">
                </form>
                <!-- Remind Password -->
                <div id="formFooter">
                    <div>
                        <a href="forget.php" class="txt1" onclick="forgot_password_fn()">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
