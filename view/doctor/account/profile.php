<?php
include '../template/header.php';
require_once('../../../model/main_model.php');
// Get user id from session
$email = $_SESSION['email'];
// Get user details from database
$user = getUserByEmail($email);

?>

<div>

    <h4>My informations</h4>
    <table>
        <tr>
            <td>Username</td>
            <td><?php echo $user[0]; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $user[2]; ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $user[3]; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $user[4]; ?></td>
        </tr>

        <tr>
            <td><a href="edit_profile.php">Edit</a></td>
        </tr>
    </table>