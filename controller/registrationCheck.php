 <?php
    session_start();
    require_once("../model/main_model.php");

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        if (empty($username) || empty($email) || empty($password) || empty($repassword) || empty($phone)) {
            echo "Please provide all fields";
        } else {
            if (strlen($username) > 3) {
                if (strlen($password) > 4) {
                    if ($password == $repassword) {
                        $user = [
                            'username' => $username,
                            'password' => $password,
                            'email' => $email,
                            'phone' => $phone,
                            'address' => $address,
                            'type' => 'doctor',
                        ];
                        $status = insertUser($user);
                        if ($status) {
                            header('location: ../view/login.php');
                        } else {
                            echo "error..try again";
                        }
                    } else {
                        echo "password & confirm password mismatch...";
                    }
                } else {
                    echo "Password must be more than 4 letters";
                }
            } else {
                echo "Username must be More than 3 letters";
            }
        }
    }
