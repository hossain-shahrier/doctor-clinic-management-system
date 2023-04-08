<?php
include '../template/header.php';
require_once('../../../model/main_model.php');
// Get user id from session
$email = $_SESSION['email'];
// Get user details from database
$user = getUserByEmail($email);

?>

<section class="info-container">
    <h1 class="info-heading">My information</h1>
    <table class="info-table">
        <tr>
            <td>Username</td>
            <td><?php echo $user['username']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $user['email']; ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $user['phone']; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $user['adress']; ?></td>
        </tr>
        <tr>
            <td><a href="edit_profile.php" class="edit-link">Edit</a></td>
        </tr>
    </table>
</section>
<?php include '../template/footer.php'; ?>