<?php
session_start();
require_once("../model/main_model.php");

$errors = array();

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    die();
}
$username = isset($_POST['username']) ? $_POST['username'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$repassword = isset($_POST['repassword']) ? $_POST['repassword'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$address = isset($_POST['address']) ? $_POST['address'] : null;

// Validate form data
$errors = [];

if (empty($username)) {
    $errors['username'] = 'Please enter your username.';
}

if (empty($email)) {
    $errors['email'] = 'Please enter your email.';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format.';
}

if (empty($password)) {
    $errors['password'] = 'Please enter your password.';
} else if (strlen($password) < 6) {
    $errors['password'] = 'Password must be at least 6 characters long.';
}

if (empty($repassword)) {
    $errors['repassword'] = 'Please re-enter your password.';
} else if ($password !== $repassword) {
    $errors['repassword'] = 'Passwords do not match.';
}

if (empty($phone)) {
    $errors['phone'] = 'Please enter your phone number.';
}

if (empty($address)) {
    $errors['address'] = 'Please enter your address.';
}
if (empty($errors)) {
    $user = [
        'username' => $username,
        'password' => $password,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'type' => 'doctor',
    ];
    insertUser($user);
    $response = ['success' => true, 'errors' => $errors];
} else {
    $response = ['success' => false, 'errors' => $errors];
}
header('Content-Type: application/json');
echo json_encode($response);
