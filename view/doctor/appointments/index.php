<?php include '../template/header.php';
require_once('../../../model/appointment_model.php');
$appointments = getAllAppointments();
?>
<div>
    <!-- Appointments page -->
    <h1>Appointments</h1>
    <table>
        <thead>
            <tr>
                <th>Appointment ID</th>
                <th>Patient Name</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Appointment Status</th>
                <th>Appointment Type</th>
                <th>Appointment Reason</th>
                <th>Appointment Notes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($appointments as $appointment) : ?>
                <tr>
                    <td><?php echo $appointment['appointment_id']; ?></td>
                    <td><?php echo $appointment['patient_name']; ?></td>
                    <td><?php echo $appointment['appointment_date']; ?></td>
                    <td><?php echo $appointment['appointment_time']; ?></td>
                    <td><?php echo $appointment['appointment_status']; ?></td>
                    <td><?php echo $appointment['appointment_type']; ?></td>
                    <td><?php echo $appointment['appointment_reason']; ?></td>
                    <td><?php echo $appointment['appointment_notes']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h2>Create appointment schedule</h2>
    <form action="../../../controller/appointmentController.php" method="post">
        <input type="hidden" name="action" value="add_appointment">
        <label>Patient Name:</label>
        <input type="text" name="patient_name"><br>
        <label>Appointment Date:</label>
        <input type="date" name="appointment_date"><br>
        <label>Appointment Time:</label>
        <input type="time" name="appointment_time"><br>
        <label>Appointment Status:</label>
        <input type="text" name="appointment_status"><br>
        <label>Appointment Type:</label>
        <input type="text" name="appointment_type"><br>
        <label>Appointment Reason:</label>
        <input type="text" name="appointment_reason"><br>
        <label>Appointment Notes:</label>
        <input type="text" name="appointment_notes"><br>
        <label>&nbsp;</label>
        <input type="submit" value="Add Appointment" name="submit" type="submit"><br>
</div>