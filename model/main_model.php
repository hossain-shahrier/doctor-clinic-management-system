<?php
require_once('config/db_config.php');
// Insert user into user.txt file
function insertUser($user)
{
    $conn = dbConnect();
    $finduser = false;

    // Check if the user already exists in the database
    $query = "SELECT * FROM users WHERE email='" . $user['email'] . "'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $finduser = true;
    }

    if ($finduser) {
        return false;
    } else {
        // Insert the user data into the database
        $query = "INSERT INTO users VALUES ('','$user[username]','$user[password]','$user[email]','$user[phone]','$user[address]','$user[type]','')";
        if (mysqli_query($conn, $query)) {
            mysqli_close($conn);
            return true;
        } else {
            mysqli_close($conn);
            return false;
        }
    }
}

function validateUser($email, $password)
{
    // Create database connection
    $conn = dbConnect();

    // Sanitize input values
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database for user with matching email and password
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // Check if query returns a row
    if (mysqli_num_rows($result) == 1) {
        return true;
    } else {
        return false;
    }

    // Close the database connection
    mysqli_close($conn);
}

// Get user name
function userName($email)
{
    $conn = dbConnect();
    $sql = "SELECT username FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user['username'];
    } else {
        return false;
    }
}


function userType($email)
{
    $conn = dbConnect();

    // Construct SQL query
    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";

    // Execute query
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user['type'];
    } else {
        return false;
    }
}


// get all doctors
function getAllDoctors()
{
    $dir = dirname("../../../../controller/user.txt");
    $file = fopen($dir . '/doctor.txt', 'r');
    $doctors = [];
    while (!feof($file)) {
        $data = fgets($file);
        array_push($doctors, $data);
    }
    fclose($file);
    return $doctors;
}

// get user by email
function getUserByEmail($email)
{
    $conn = dbConnect();

    // Construct SQL query
    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";

    // Execute query
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        return false;
    }
}
// Get all user
function getAllUsersByName($patient_name)
{
    $conn = dbConnect();

    // Construct SQL query
    $sql = "SELECT * FROM patients WHERE username = '$patient_name' LIMIT 1";

    // Execute query
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        return false;
    }
}
function updateUser($user)
{
    $conn = dbConnect();

    // Escape user input to avoid SQL injection
    $username = mysqli_real_escape_string($conn, $user['username']);
    $password = mysqli_real_escape_string($conn, $user['password']);
    $email = mysqli_real_escape_string($conn, $user['email']);
    $phone = mysqli_real_escape_string($conn, $user['phone']);
    $address = mysqli_real_escape_string($conn, $user['address']);

    // Construct SQL query
    $sql = "UPDATE users SET username='$username', password='$password', phone='$phone', adress='$address' WHERE email='$email'";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
