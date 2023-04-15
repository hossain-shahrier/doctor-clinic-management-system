<?php
session_start();
if (isset($_SESSION['email'])) {
    header('location: ./doctor/account/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="./public/login.css">
</head>

<body>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="/doctor/view/index.html">Healthify</a>
            </div>
            <ul class="menu">
                <li><button onclick="home()" style="border: none;text-decoration: none;color: white; background:none ;cursor: pointer; font-size: large;">Home</button></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><button class="btn login-btn">Login</button></li>
            </ul>
        </div>
    </nav>
    <div class="signin-content">
        <div class="error"></div>
        <form id="form" name="login" onsubmit="return validation()" action="../controller/loginCheck.php" method="POST">
            <h1>Login</h1>
            <div class="form-group">
                <label for="email">Email</label><br />
                <input type="email" name="email" id="email" />
                <span id="error" style="color:red;"></span>
            </div>

            <div class="form-group">
                <label for="password">Password</label><br />
                <input type="password" name="password" id="password" />
                <span id="errorPass" style="color:red;"></span>
            </div>
            <div class="form-group">
                <label for="rememberMe">Remember Me</label>
                <input type="checkbox" name="rememberMe">
            </div>
            <div class="form-group">
                <input class="btn" name="submit" type="submit" value="Submit" />
            </div>
            <p>Don't have an account? <a href="./register.php"><strong>Register</strong></a></p>
        </form>
    </div>

</body>

</html>
<script src="public/index.js"></script>