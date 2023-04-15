<?php
include('../template/header.php');
?>
<section>
    <div class="prescription-form">
        <div class="form-header">
            <h3 class="form-title">Make Prescription</h3>
        </div>
        <form action="../../../controller/prescription.php" id="form" name="prescription" method="post" onsubmit="return validation()">
            <div class="form-group">
                <label for="patient_name" class="form-label">Patient Name</label>
                <input type="text" id="patient_name" name="patient_name" class="form-input" placeholder="Enter Patient Name">
                <span id="error-name" style="color:red;"></span>
            </div>
            <div class="form-group">
                <label for="patient_id" class="form-label">Patient ID</label>
                <input type="text" id="patient_id" name="patient_id" class="form-input" placeholder="Enter Patient ID">
                <span id="error-id" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="doctor_name" class="form-label">Doctor Name</label>
                <input type="text" id="doctor_name" name="doctor_name" class="form-input" placeholder="Enter Doctor Name">
                <span id="error-doctor-name" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="doctor_id" class="form-label">Doctor ID</label>
                <input type="text" id="doctor_id" name="doctor_id" class="form-input" placeholder="Enter Doctor ID">
                <span id="error-doctor-id" style="color:red;"></span>

            </div>
            <div class="form-group">
                <label for="prescription" class="form-label">Prescription</label>
                <textarea id="prescription" name="prescription" class="form-textarea" placeholder="Enter Prescription"></textarea>
                <span id="error-prescription" style="color:red;"></span>

            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</section>
<script src="js/index.js"></script>
<?php include('../template/footer.php'); ?>