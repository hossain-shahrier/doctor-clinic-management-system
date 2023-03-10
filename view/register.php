<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>

    <div class="signup-content">
        <form id="form" name="login" action="../controller/registrationCheck.php" method="POST">
            <fieldset>
                <legend>Registration</legend>
                <label for="username">Username</label><br />
                <input type="text" name="username" />
                <br />
                <label for="email">Email</label><br />
                <input type="email" name="email" />
                <br />

                <label for="password">Password</label><br />
                <input type="password" name="password" />
                <br />

                <label for="repassword">Re-password</label><br />
                <input type="password" name="repassword" />
                <br />

                <label for="phone">Phone</label><br />
                <input type="text" name="phone" />
                <br />

                <label for="address">Address</label><br />
                <input type="text" name="address" />
                <br />

                <input class="submit" name="submit" type="submit" value="submit" />
                <P>Have an account? <a href="./login.php"><strong>Login</strong></a></P>

            </fieldset>


        </form>

</body>

</html>