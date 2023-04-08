Copy code
<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    function verify_email_exists($email)
    {
        // connect to database
        $conn = mysqli_connect("localhost", "username", "password", "database_name");

        // prepare query
        $query = "SELECT COUNT(*) FROM users WHERE email = ?";

        $stmt = mysqli_prepare($conn, $query);

        mysqli_stmt_bind_param($stmt, "s", $email);

        mysqli_stmt_execute($stmt);

        mysqli_stmt_bind_result($stmt, $count);

        mysqli_stmt_fetch($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return $count > 0;
    }
    function save_token($token, $email)
    {
        // Set the expiration time of the token 
        $expires = time() + 3600;
        // Save the token and its expiration time in a cookie
        setcookie('reset_token', $token, $expires, '/');
        setcookie('reset_email', $email, $expires, '/');
    }
    function send_reset_password_email($email, $token)
    {
        $to = $email;
        $subject = 'Reset Password';
        $message = 'Hello,

    You have requested to reset your password. Please click on the following link to reset your password:
    http://example.com/reset_password.php?token=' . urlencode($token) . '

    If you did not make this request, you can safely ignore this email.

    Best regards,
    Your Website Team';
        $headers = 'From: Your Website <noreply@example.com>' . "\r\n" .
            'Reply-To: noreply@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        return mail($to, $subject, $message, $headers);
    }

    if (verify_email_exists($email)) {
        $token = bin2hex(random_bytes(32));

        setcookie('forgot_password_token', $token, time() + 3600, '/');

        save_token($token, $email);

        send_reset_password_email($email, $token);

        echo 'An email with instructions on how to reset your password has been sent to your email address.';
    } else {
        echo 'The provided email address does not exist in our database.';
    }
}
?>
<h1>Forgot Password</h1>
<form method="post">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" required>
    </div>
    <div class="form-group">
        <button class="btn" type="submit" name="submit">Reset Password</button>
    </div>
</form>