<?php include '../template/header.php';
require_once('../../../model/appointment_model.php');
$appointments = getAllAppointments();
?>
<section class="container">
    <!-- Appointments page -->
    <h1 class="page-title">Appointments</h1>
    <di class="table-container">

        <table class="table">
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
    </di>
    <div class="appointment-form">
        <h2 class="form-title">Create appointment schedule</h2>
        <form action="../../../controller/appointmentController.php" id="form" name="appointment" method="post" onsubmit="return validation()">
            <div class="form-group">
                <label for="patient_name">Patient Name:</label>
                <input type="text" name="patient_name" id="patient_name" class="form-input">
                <span id="error-name" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="appointment_date">Appointment Date:</label>
                <input type="date" name="appointment_date" id="appointment_date" class="form-input">
                <span id="error-date" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="appointment_time">Appointment Time:</label>
                <input type="time" name="appointment_time" id="appointment_time" class="form-input">
                <span id="error-time" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="appointment_status">Appointment Status:</label>
                <input type="text" name="appointment_status" id="appointment_status" class="form-input">
                <span id="error-status" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="appointment_type">Appointment Type:</label>
                <input type="text" name="appointment_type" id="appointment_type" class="form-input">
                <span id="error-type" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="appointment_reason">Appointment Reason:</label>
                <input type="text" name="appointment_reason" id="appointment_reason" class="form-input">
                <span id="error-reason" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="appointment_notes">Appointment Notes:</label>
                <input type="text" name="appointment_notes" id="appointment_notes" class="form-input">
                <span id="error-notes" style="color:red;"></span>

            </div>
            <button type="submit" id="submit" class="btn">Add Appointment</button>
        </form>
    </div>
</section>
<script src="js/index.js"></script>

<?php include '../template/footer.php'; ?>