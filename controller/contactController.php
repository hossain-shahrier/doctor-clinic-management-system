<?php

require_once('../model/contactModel.php');

if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    echo $name;
    // Validate input data
    $errors = [];
    if (empty($name)) {
        $errors['name'] = 'Please enter your name.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }
    if (empty($message)) {
        $errors['message'] = 'Please enter a message.';
    }

    // If there are errors, display the form with errors
    if (!empty($errors)) {
        require_once 'view/contactForm.php';
    } else {
        // If there are no errors, save the message to the database
        $status = saveContactForm($name, $email, $message);

        if (!$status) {
            die('Error: Could not save the message.');
        }
        // Redirect to a thank you page
        header('Location: thanks.php');
        exit();
    }
}
