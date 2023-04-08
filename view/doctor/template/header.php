<?php
session_start();
require_once("../../../model/main_model.php");
if (!isset($_SESSION['username']) || !isset($_SESSION['email']) || !isset($_SESSION['type'])) {
    header('location: ../../login.php');
    exit();
}
$email = $_SESSION['email'];
$username = userName($email);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <title>Doctor</title>
</head>

<body>
    <div>
        <!-- Navbar -->
        <nav>
            <div class="container">
                <div class="logo">
                    <div style="display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <a href="../account/">Healthify</a>
                        <h6>Welcome, <?php echo $username; ?></h6>
                    </div>

                </div>
                <ul class="menu">
                    <li><a href="../account/">Home</a></li>
                    <li><a href="../records/">Records</a></li>
                    <li><a href="../account/profile.php">Profile</a></li>
                    <li><button class="btn login-btn"><a href="./logout.php">Logout</a></button></li>
                </ul>
            </div>
        </nav>