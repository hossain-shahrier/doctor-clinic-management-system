<!-- Health records system to provide doctors with access to patient medical history -->
<?php include '../template/header.php'; ?>
<?php
require_once('../../../model/record_model.php');
$records = getAllRecords();
?>

<div>
    <h1>Health Records</h1>
    <table>
        <thead>
            <tr>
                <th>Record ID</th>
                <th>Patient Name</th>
                <th>Record Date</th>
                <th>Record Type</th>
                <th>Record Notes</th>
                <th>Previous Problems</th>
                <th>Privious Reservation date</th>
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

    <div>
        <h3>Create Record</h3>
        <form action="../../../controller/recordController.php" method="post">
            <div>
                <label for="patient_name">Patient Name</label>
                <br />
                <input type="text" id="patient_name" name="patient_name" placeholder="Enter Patient Name">
            </div>
            <div>
                <label for="record_date">Record Date</label>
                <br />
                <input type="date" id="record_date" name="record_date" placeholder="Enter Record Date">
            </div>
            <div>
                <label for="record_type">Record Type</label>
                <br />
                <input type="text" id="record_type" name="record_type" placeholder="Enter Record Type">
            </div>
            <div>
                <label for="record_notes">Record Notes</label>
                <br />
                <input type="text" id="record_notes" name="record_notes" placeholder="Enter Record Notes">
            </div>
            <div>
                <label for="previous_problems">Previous Problems</label>
                <br />
                <input type="text" id="previous_problems" name="previous_problems" placeholder="Enter Previous Problems">
            </div>
            <div>
                <label for="previous_reservation_date">Previous Reservation Date</label>
                <br />
                <input type="date" id="previous_reservation_date" name="previous_reservation_date" placeholder="Enter Previous Reservation Date">
            </div>
            <button type="submit">Create</button>
        </form>
    </div>