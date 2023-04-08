<?php
require_once('../model/appointment_model.php');
if (empty($_POST['patient_name']) || empty($_POST['appointment_date']) || empty($_POST['appointment_time']) || empty($_POST['appointment_status']) || empty($_POST['appointment_type']) || empty($_POST['appointment_reason']) || empty($_POST['appointment_notes'])) {
    echo "Please fill all the fields";
} else {
    $appointment_id = uniqid();
    $patient_name = $_POST['patient_name'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $appointment_status = $_POST['appointment_status'];
    $appointment_type = $_POST['appointment_type'];
    $appointment_reason = $_POST['appointment_reason'];
    $appointment_notes = $_POST['appointment_notes'];
    $appointment = array(
        'appointment_id' => $appointment_id,
        'patient_name' => $patient_name,
        'appointment_date' => $appointment_date,
        'appointment_time' => $appointment_time,
        'appointment_status' => $appointment_status,
        'appointment_type' => $appointment_type,
        'appointment_reason' => $appointment_reason,
        'appointment_notes' => $appointment_notes
    );
    $status = addAppointment($appointment);
    if ($status) {
        header('Location: ../view/doctor/appointments/');
    } else {
        echo "Failed to add appointment";
    }
}
