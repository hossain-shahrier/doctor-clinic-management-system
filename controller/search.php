<?php
require_once('../model/main_model.php');

if (isset($_POST['patient_name'])) {
    $patient_name = $_POST['patient_name'];
    $users = getAllUsersByName($patient_name);
    if ($users) {
        foreach ($users as $user) {
            echo "<fieldset>";
            echo "<legend>User</legend>";
            echo "<p>Username: " . $user['username'] . "</p>";
            echo "<p>Email: " . $user['email'] . "</p>";
            echo "<p>Phone: " . $user['phone'] . "</p>";
            echo "<p>Address: " . $user['address'] . "</p>";
            echo "<p>Type: " . $user['type'] . "</p>";
            echo "<p>Problems: " . $user['problems'] . "</p>";
            echo "</fieldset>";
            echo "<a href='../view/doctor/records'>Records</a>";
        }
    } else {
        echo 'No user found';
    }
}
