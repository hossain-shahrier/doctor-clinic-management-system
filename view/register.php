<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="public/registration.css">
</head>

<body>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="/doctor/view/index.html">Healthify</a>
            </div>
            <ul class="menu">
                <li><a href="/doctor/view/index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><button class="btn login-btn">Login</button></li>
            </ul>
        </div>
    </nav>
    <div class="form-container">
        <div class="signup-content">
            <form id="form" name="signup" onsubmit="return validateForm()" action="../controller/registrationCheck.php" method="POST">
                <h1>Registration</h1>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username">
                    <span id="error-username" style="color:red;"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <span id="error-email" style="color:red;"></span>

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                    <span id="error-password" style="color:red;"></span>

                </div>
                <div class="form-group">
                    <label for="repassword">Re-password</label>
                    <input type="password" name="repassword">
                    <span id="error-repassword" style="color:red;"></span>

                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone">
                    <span id="error-phone" style="color:red;"></span>

                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address">
                    <span id="error-address" style="color:red;"></span>

                </div>
                <div class="form-group">
                    <input class="btn" name="submit" type="submit" value="Submit">
                </div>
                <p class="login-link">Have an account? <a href="./login.php">Login here</a></p>
            </form>
        </div>
    </div>
</body>

</html>
<script src="public/index.js"></script>