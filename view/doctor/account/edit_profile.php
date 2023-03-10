<!-- Edit Account details -->
<?php
include '../template/header.php';

require_once('../../../model/main_model.php');
$email = $_SESSION['email'];
$user = getUserByEmail($email);
?>

<div class="account-details">
    <h1>Edit Account Details</h1>
    <form action="../../../controller/editController.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?php echo $user[0]; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $user[2]; ?>"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value="<?php echo $user[3]; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $user[4]; ?>"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
<?php
include '../template/footer.php';
?>