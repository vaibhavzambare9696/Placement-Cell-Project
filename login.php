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
                <?php include('login_process.php'); ?>
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
