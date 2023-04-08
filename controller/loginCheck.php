<?php
session_start();
require_once("../model/main_model.php");
if (isset($_POST['submit'])) {
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    if (empty($email) || empty($password)) {
        echo "Null Input";
    } else {
        $status = validateUser($email, $password);
        echo $status;
        if ($status) {
            $_SESSION['email'] = $email;
            $_SESSION['username'] = userName($email);
            $_SESSION['type'] = userType($email);

            header('Location: ../view/doctor/home.php');
        } else {
            echo "Invalid User";
        }
    }
}
