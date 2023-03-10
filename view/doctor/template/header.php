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
    <title>Doctor</title>
</head>

<body>
    <div>
        <header style="display: flex; justify-content: space-between;align-items: center;">
            <div style="display: flex;align-items: center;gap: 10px;">
                <h1>Welcome, <?php echo $username; ?></h1>
                <a href="../account/">Home</a>
            </div>
            <a href="./logout.php">Logout</a>

        </header>