<?php include '../template/header.php';

?>
<div>
    <div>
        <div>
            <h3>Search Patient</h3>
            <form action="../../../controller/search.php" method="post">
                <div>
                    <label for="patient_name">Patient Name</label>
                    <br />
                    <input type="text" id="patient_name" name="patient_name" placeholder="Enter Patient Name">
                </div>
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<ul>
    <li><a href="./profile.php">Profile</a></li>
    <li><a href="../appointments/">Appointments</a></li>
    <li><a href="../records/">Health Records</a></li>
    <li><a href="../prescription/">Prescription</a></li>

</ul>