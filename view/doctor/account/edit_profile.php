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
                <td><label for="username">Username</label></td>
                <td><input type="text" id="username" name="username" value="<?php echo $user['username']; ?>"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" id="password" name="password" value="<?php echo $user['password'] ?>"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" id="email" name="email" value="<?php echo $user['email'] ?>"></td>
            </tr>
            <tr>
                <td><label for="phone">Phone</label></td>
                <td><input type="text" id="phone" name="phone" value="<?php echo $user['phone']; ?>"></td>
            </tr>
            <tr>
                <td><label for="address">Address</label></td>
                <td><input type="text" id="address" name="address" value="<?php echo $user['adress']; ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td><input class="btn" type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</div>

<?php
include '../template/footer.php';
?>