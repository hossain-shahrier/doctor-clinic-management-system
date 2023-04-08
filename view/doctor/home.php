<?php
session_start();
$type = $_SESSION['type'];
if ($type == 'doctor') {
    header('location: ./account/');
} else {
    header('location: ../login.php');
}
