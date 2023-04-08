<?php

require_once('config/db_config.php');
function saveContactForm($name, $email, $message)
{
    echo "ANy";
    // Connect to the database
    $conn = dbConnect();
    // Prepare the SQL statement
    $sql = "INSERT INTO contacts VALUES ('','$name','$email','$message','')";

    // Execute the SQL statement and check if it was successful
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    // Close the database connection
    mysqli_close($conn);

    return true;
}
