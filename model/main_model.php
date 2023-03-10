<?php
// Insert user into user.txt file
function insertUser($user)
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/doctor.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $user['email']) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return false;
    } else {
        $file = fopen('../model/doctor.txt', 'a');
        $user = $user['username'] . '|' . $user['password'] . '|' . $user['email'] . '|' . $user['phone'] . '|' . $user['address'] . '|' . $user['type'] . "|" . "\n";
        fwrite($file, $user);
        fclose($file);
        return true;
    }
}
// Validate user
function validateUser($email, $password)
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/doctor.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[1] == $password && $user_data[2] == $email) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return true;
    } else {
        return false;
    }
}
// Get user name
function userName($email)
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/doctor.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $email) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return $user_data[0];
    } else {
        return false;
    }
}

// get user type
function userType($email)
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/doctor.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $email) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return $user_data[5];
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
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/doctor.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $email) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return $user_data;
    } else {
        return false;
    }
}
// Get all user
function getAllUsersByName($patient_name)
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/users.txt', 'r');
    $users = array();
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if (count($user_data) > 1) {
            if ($user_data[0] == $patient_name) {
                $users[] = array(
                    'username' => $user_data[0],
                    'email' => $user_data[1],
                    'phone' => $user_data[2],
                    'address' => $user_data[3],
                    'type' => $user_data[4],
                    'problems' => $user_data[5],
                );
            }
        }
    }
    fclose($file);
    return $users;
}
// update user
function updateUser($user)
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/doctor.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $user['email']) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        $file = fopen('../model/doctor.txt', 'w');
        $user = $user['username'] . '|' . $user['password'] . '|' . $user['email'] . '|' . $user['phone'] . '|' . $user['address'] . '|' . $user['type'] . "|" . "\n";
        fwrite($file, $user);
        fclose($file);
        return true;
    } else {
        return false;
    }
}
