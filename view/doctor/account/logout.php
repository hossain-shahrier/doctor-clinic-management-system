<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Delete the session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

// Destroy the session
session_destroy();

// Delete the remember me cookie
if (isset($_COOKIE['email'])) {
    setcookie('email', '', time() - 3600, '/');
}

// Redirect to login page
header('Location: ../../login.php');
exit();
