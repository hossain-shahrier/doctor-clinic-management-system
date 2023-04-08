<!DOCTYPE html>
<html>

<head>
    <title>Search User</title>
    <style>
        body {
            background-color: #f5f5f5;
            margin: 50px auto;
            max-width: 900px;
        }

        .btn {
            background-color: #49b1f7;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* 3c58a0 */
        .btn:hover {
            background-color: #3c58a0;
            color: #fff;
        }


        a {
            display: block;
            margin-top: 20px;
            font-size: 16px;
            text-align: center;
        }

        p {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['patient_name'])) {
        require_once '../model/main_model.php';
        $patient_name = $_POST['patient_name'];
        $users = getAllUsersByName($patient_name);
        if ($users) {
            echo "<h1>Patient Information</h1>";
            echo "<p>Patient Name: " . $users['username'] . "</p>";
            echo "<p>Email: " . $users['email'] . "</p>";
            echo "<p>Phone: " . $users['phone'] . "</p>";
            echo "<p>Address: " . $users['address'] . "</p>";
            echo "<p>Type: " . $users['type'] . "</p>";
            echo "<p>Problems: " . $users['problems'] . "</p>";
            echo "<a href='../view/doctor/records' class='btn'>Records</a>";
        } else {
            echo 'No user found';
        }
    }
    ?>
</body>

</html>