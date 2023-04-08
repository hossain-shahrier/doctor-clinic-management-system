<?php
require_once('config/db_config.php');

function getAllAppointments()
{
    $conn = dbConnect();

    // Construct SQL query
    $sql = "SELECT * FROM appointments";

    // Execute query
    $result = mysqli_query($conn, $sql);

    // Check if any records were found
    if (mysqli_num_rows($result) > 0) {
        $appointments = array();

        // Loop through each row in the result set and add it to the records array
        while ($row = mysqli_fetch_assoc($result)) {
            $appointments[] = array(
                'appointment_id' => $row['appointment_id'],
                'patient_name' => $row['patient_name'],
                'appointment_date' => $row['appointment_date'],
                'appointment_time' => $row['appointment_time'],
                'appointment_status' => $row['appointment_status'],
                'appointment_type' => $row['appointment_type'],
                'appointment_reason' => $row['appointment_reason'],
                'appointment_notes' => $row['appointment_notes'],
            );
        }

        // Free the result set
        mysqli_free_result($result);

        // Close the database connection
        mysqli_close($conn);

        // Return the appointments array
        return $appointments;
    } else {
        // No records found
        return array();
    }
}

function addAppointment($appointment)
{
    $conn = dbConnect();

    $appointment_id = mysqli_real_escape_string($conn, $appointment['appointment_id']);
    $patient_name = mysqli_real_escape_string($conn, $appointment['patient_name']);
    $appointment_date = mysqli_real_escape_string($conn, $appointment['appointment_date']);
    $appointment_time = mysqli_real_escape_string($conn, $appointment['appointment_time']);
    $appointment_status = mysqli_real_escape_string($conn, $appointment['appointment_status']);
    $appointment_type = mysqli_real_escape_string($conn, $appointment['appointment_type']);
    $appointment_reason = mysqli_real_escape_string($conn, $appointment['appointment_reason']);
    $appointment_notes = mysqli_real_escape_string($conn, $appointment['appointment_notes']);

    $sql = "INSERT INTO `appointments`(`appointment_id`, `patient_name`, `appointment_time`, `appointment_date`,`appointment_status`, `appointment_type`, `appointment_reason`, `appointment_notes`) VALUES ('$appointment_id','$patient_name','$appointment_time','$appointment_date','$appointment_status','$appointment_type','$appointment_reason','$appointment_notes')";

    // Execute query
    $result = mysqli_query($conn, $sql);

    // Check if record was created successfully
    if ($result) {
        return true;
    } else {
        return false;
    }
}
