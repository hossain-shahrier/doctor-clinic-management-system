<?php
session_start();
require_once("../model/main_model.php");

header('Content-Type: application/json');

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $status = validateUser($email, $password);
        if ($status) {
            $_SESSION['email'] = $email;
            $_SESSION['username'] = userName($email);
            $_SESSION['type'] = userType($email);

            $response = array('success' => true);
        } else {
            $response = array('success' => false, 'errors' => array('email' => 'Invalid email or password.', 'password' => 'Invalid email or password.'));
        }
    } else {
        $response = array('success' => false, 'errors' => array('email' => 'All fields are required.', 'password' => 'All fields are required.'));
    }
}
echo json_encode($response);
