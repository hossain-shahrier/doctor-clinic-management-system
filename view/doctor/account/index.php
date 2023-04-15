<?php include '../template/header.php';
?>
<section class="home-search">
    <div class="home-search-container">
        <h3 class="home-search-title">Search Patient</h3>
        <form id="form" name="search" action="../../../controller/search.php" method="post" onsubmit="return validation()">
            <div class="home-search-input">
                <label for="patient_name">Patient Name</label>
                <input type="text" id="patient_name" name="patient_name" placeholder="Enter Patient Name">
                <span id="error" style="color:red;"></span>
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
<script src="js/index.js"></script>
<?php include '../template/footer.php';
