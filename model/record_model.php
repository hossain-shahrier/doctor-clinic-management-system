<?php
require_once('config/db_config.php');

function getAllRecords()
{
    $conn = dbConnect();

    // Construct SQL query
    $sql = "SELECT * FROM patient_records";

    // Execute query
    $result = mysqli_query($conn, $sql);

    // Check if any records were found
    if (mysqli_num_rows($result) > 0) {
        $records = array();

        // Loop through each row in the result set and add it to the records array
        while ($row = mysqli_fetch_assoc($result)) {
            $records[] = array(
                'record_id' => $row['record_id'],
                'patient_name' => $row['patient_name'],
                'record_date' => $row['record_date'],
                'record_type' => $row['record_type'],
                'record_notes' => $row['record_notes'],
                'previous_problems' => $row['previous_problems'],
                'previous_reservation_date' => $row['previous_reservation_date']
            );
        }

        // Free the result set
        mysqli_free_result($result);

        // Close the database connection
        mysqli_close($conn);

        // Return the records array
        return $records;
    } else {
        // No records found
        return array();
    }
}

function createRecord($record)
{
    $conn = dbConnect();

    $record_id = mysqli_real_escape_string($conn, $record['record_id']);
    $patient_name = mysqli_real_escape_string($conn, $record['patient_name']);
    $record_type = mysqli_real_escape_string($conn, $record['record_type']);
    $record_notes = mysqli_real_escape_string($conn, $record['record_notes']);
    $previous_problems = mysqli_real_escape_string($conn, $record['previous_problems']);
    $previous_reservation_date = mysqli_real_escape_string($conn, $record['previous_reservation_date']);

    $sql = "INSERT INTO `patient_records`(`record_id`, `patient_name`, `record_type`, `record_notes`, `previous_problems`, `previous_reservation_date`) VALUES ('$record_id','$patient_name','$record_type','$record_notes','$previous_problems','$previous_reservation_date')";

    // Execute query
    $result = mysqli_query($conn, $sql);

    // Check if record was created successfully
    if ($result) {
        return true;
    } else {
        return false;
    }
}
