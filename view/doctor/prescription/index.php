<?php
include('../template/header.php');
?>
<section>
    <div class="prescription-form">
        <div class="form-header">
            <h3 class="form-title">Make Prescription</h3>
        </div>
        <form action="../../../controller/prescription.php" method="post">
            <div class="form-group">
                <label for="patient_name" class="form-label">Patient Name</label>
                <input type="text" id="patient_name" name="patient_name" class="form-input" placeholder="Enter Patient Name">
            </div>
            <div class="form-group">
                <label for="patient_id" class="form-label">Patient ID</label>
                <input type="text" id="patient_id" name="patient_id" class="form-input" placeholder="Enter Patient ID">
            </div>
            <div class="form-group">
                <label for="doctor_name" class="form-label">Doctor Name</label>
                <input type="text" id="doctor_name" name="doctor_name" class="form-input" placeholder="Enter Doctor Name">
            </div>
            <div class="form-group">
                <label for="doctor_id" class="form-label">Doctor ID</label>
                <input type="text" id="doctor_id" name="doctor_id" class="form-input" placeholder="Enter Doctor ID">
            </div>
            <div class="form-group">
                <label for="prescription" class="form-label">Prescription</label>
                <textarea id="prescription" name="prescription" class="form-textarea" placeholder="Enter Prescription"></textarea>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
        </div>
</section>
<?php include('../template/footer.php'); ?>