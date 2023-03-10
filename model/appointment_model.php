<?php
function getAllAppointments()
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/appointments.txt', 'r');
    $appointments = array();
    while (!feof($file)) {
        $line = fgets($file);
        $appointment = explode('|', $line);
        if (count($appointment) > 1) {
            $appointments[] = array(
                'appointment_id' => $appointment[0],
                'patient_name' => $appointment[1],
                'appointment_date' => $appointment[2],
                'appointment_time' => $appointment[3],
                'appointment_status' => $appointment[4],
                'appointment_type' => $appointment[5],
                'appointment_reason' => $appointment[6],
                'appointment_notes' => $appointment[7]
            );
        }
    }
    fclose($file);
    return $appointments;
}

function addAppointment($appointment)
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/appointments.txt', 'a');
    $appointment_id = uniqid();
    $appointment = $appointment_id . '|' . $appointment['patient_name'] . '|' . $appointment['appointment_date'] . '|' . $appointment['appointment_time'] . '|' . $appointment['appointment_status'] . '|' . $appointment['appointment_type'] . '|' . $appointment['appointment_reason'] . '|' . $appointment['appointment_notes'] . '|' . "\n";
    fwrite($file, $appointment);
    fclose($file);
}
