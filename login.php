<?php
include 'koneksi.php';
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style login.css">
    <link rel="icon" href="assets/images/logo-digital.png">
    <title>Login</title>
    <body>
        <div class="box">
            <div class="form">
                <form action="authenticate.php" method="post">
                <h2>Sign In</h2>
                <div class="inputBox">
                    <input type="text" id="username" name="username" required>
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" id="password" name="password" required>
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="register.php">Sign Up</a>
                </div>
                <input type="submit" value="Login">
                <center><a href="index.php">Beranda</a></center>
                </form>
            </div>
        </div>
    </body>
</head>
</html>