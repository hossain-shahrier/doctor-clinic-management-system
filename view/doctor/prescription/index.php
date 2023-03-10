<!-- make prescription form -->
<div>
    <div>
        <div>
            <h3>Make Prescription</h3>
            <form action="../../../controller/prescription.php" method="post">
                <div>
                    <label for="patient_name">Patient Name</label>
                    <br />
                    <input type="text" id="patient_name" name="patient_name" placeholder="Enter Patient Name">
                </div>
                <div>
                    <label for="patient_id">Patient ID</label>
                    <br />
                    <input type="text" id="patient_id" name="patient_id" placeholder="Enter Patient ID">
                </div>
                <div>
                    <label for="doctor_name">Doctor Name</label>
                    <br />
                    <input type="text" id="doctor_name" name="doctor_name" placeholder="Enter Doctor Name">
                </div>
                <div>
                    <label for="doctor_id">Doctor ID</label>
                    <br />
                    <input type="text" id="doctor_id" name="doctor_id" placeholder="Enter Doctor ID">
                </div>
                <div>
                    <label for="prescription">Prescription</label>
                    <br />
                    <textarea id="prescription" name="prescription" placeholder="Enter Prescription"></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>