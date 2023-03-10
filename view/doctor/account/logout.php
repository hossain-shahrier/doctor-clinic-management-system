<?php
session_start();
unset($_SESSION['type']);
session_destroy();
header('location: ../../login.php');
