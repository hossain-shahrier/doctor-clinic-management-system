<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <div class="signup-content">
        <div class="error"></div>
        <form id="form" name="signup" action="../controller/loginCheck.php" method="POST">
            <fieldset>
                <legend>Login</legend>

                <label for="email">Email</label><br />
                <input type="email" name="email" />
                <br />

                <label for="password">Password</label><br />
                <input type="password" name="password" />
                <br />

                <input class="submit" name="submit" type="submit" value="submit" />

                <p>Don't have an account? <a href="./register.php"><strong>Register</strong></a></p>
            </fieldset>
        </form>

</body>

</html>