<?php
// create record
require_once('../model/record_model.php');
if (isset($_POST['patient_name']) && isset($_POST['record_type']) && isset($_POST['record_notes']) && isset($_POST['previous_problems']) && isset($_POST['previous_reservation_date'])) {
    $record_id = uniqid();
    $patient_name = $_POST['patient_name'];
    $record_type = $_POST['record_type'];
    $record_notes = $_POST['record_notes'];
    $previous_problems = $_POST['previous_problems'];
    $previous_reservation_date = $_POST['previous_reservation_date'];
    $record = array(
        'record_id' => $record_id,
        'patient_name' => $patient_name,
        'record_type' => $record_type,
        'record_notes' => $record_notes,
        'previous_problems' => $previous_problems,
        'previous_reservation_date' => $previous_reservation_date
    );
    $result = createRecord($record);
    if ($result) {
        header('Location: ../view/doctor/records/');
    } else {
        echo 'Error creating record';
    }
}
