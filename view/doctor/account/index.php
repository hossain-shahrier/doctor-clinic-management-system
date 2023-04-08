<?php include '../template/header.php';
?>
<section class="home-search">
    <div class="home-search-container">
        <h3 class="home-search-title">Search Patient</h3>
        <form action="../../../controller/search.php" method="post">
            <div class="home-search-input">
                <label for="patient_name">Patient Name</label>
                <input type="text" id="patient_name" name="patient_name" placeholder="Enter Patient Name">
            </div>
            <button type="submit" class="btn">Search</button>
        </form>
    </div>
    <div class="section-nav-items">
        <ul>
            <li><a href="../appointments/">Appointments</a></li>
            <li><a href="../records/">Health Records</a></li>
            <li><a href="../prescription/">Prescription</a></li>
        </ul>
    </div>

</section>
<?php include '../template/footer.php';
