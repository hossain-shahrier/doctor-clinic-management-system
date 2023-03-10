<?php
session_start();
require_once("../model/main_model.php");
// edit user
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    if (empty($username) || empty($email) || empty($phone) || empty($address)) {
        echo "No input found";
    } else {
        $user = [
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'type' => 'patient'
        ];
        $status = updateUser($user);
        if ($status) {
            header('location: ../view/doctor/account/profile.php');
        } else {
            echo "Error";
        }
    }
}
