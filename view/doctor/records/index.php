<?php
require_once('../../../model/record_model.php');
include('../template/header.php');
$records = getAllRecords();
?>

<section class="health-records">
    <h1 class="section-title">Health Records</h1>
    <table class="records-table">
        <thead>
            <tr>
                <th>Record ID</th>
                <th>Patient Name</th>
                <th>Record Date</th>
                <th>Record Type</th>
                <th>Record Notes</th>
                <th>Previous Problems</th>
                <th>Previous Reservation Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record) : ?>
                <tr>
                    <td><?php echo $record['record_id']; ?></td>
                    <td><?php echo $record['patient_name']; ?></td>
                    <td><?php echo $record['record_date']; ?></td>
                    <td><?php echo $record['record_type']; ?></td>
                    <td><?php echo $record['record_notes']; ?></td>
                    <td><?php echo $record['previous_problems']; ?></td>
                    <td><?php echo $record['previous_reservation_date']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="create-record-form">
        <h2 class="form-title">Create Record</h2>
        <form action="../../../controller/recordController.php" id="form" name="record" method="post" onsubmit="return validation()">
            <div class="form-group">
                <label for="patient_name" class="form-label">Patient Name</label>
                <input type="text" id="patient_name" name="patient_name" class="form-input" placeholder="Enter Patient Name">
                <span id="error-name" style="color:red;"></span>
            </div>

            <div class="form-group">
                <label for="record_type" class="form-label">Record Type</label>
                <input type="text" id="record_type" name="record_type" class="form-input" placeholder="Enter Record Type">
                <span id="error-type" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="record_notes" class="form-label">Record Notes</label>
                <input type="text" id="record_notes" name="record_notes" class="form-input" placeholder="Enter Record Notes">
                <span id="error-note" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="previous_problems" class="form-label">Previous Problems</label>
                <input type="text" id="previous_problems" name="previous_problems" class="form-input" placeholder="Enter Previous Problems">
                <span id="error-problem" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="previous_reservation_date" class="form-label">Previous Reservation Date</label>
                <input type="date" id="previous_reservation_date" name="previous_reservation_date" class="form-input" placeholder="Enter Previous Reservation Date">
                <span id="error-date" style="color:red;"></span>

            </div>
            <button type="submit" class="btn">Create</button>
        </form>
    </div>
</section>
<script src="js/index.js"></script>
<?php include('../template/footer.php'); ?>