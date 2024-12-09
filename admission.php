<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admission</title>
    <link rel="stylesheet" href="css/IQAC/iqac.css"> <!-- Your existing CSS file -->
    <link rel="stylesheet" href="css/home-content-style/styles.css">
    <link rel="stylesheet" href="css/home-content-style/footer.css">
    <link rel="stylesheet" href="css/home-content-style/addmission.css">
    <link href="css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <?php 
    include("reuseable_files/header.html");
    ?>
    <div class="title-iqac">
        <h1 style='font-size:23px; font-weight:bold;'>ADMISSION</h1>
    </div>
    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="admission/programme_offered.html" class="iqac-link">Programme Offered</a></li>
                <li><a href="admission/admission_guidelines.html" class="iqac-link">Guideliness For Admission</a></li>
                <li><a href="admission/online_application.html" class="iqac-link">Online Application & Prospectus</a></li>
                <li><a href="admission/fee_refund.html" class="iqac-link">Fee Refund Policy</a></li>
                <!-- More Sub-Navigation Links -->
            </ul>
        </nav>
        <!-- Main Content Section where the IQAC content will be loaded -->
        <div id="iqac-content">
            <h2>Welcome to IQAC</h2>
            <p>This section will dynamically update when you click on the sub-navigation links.</p>
        </div>
    </section>
<?php 
include('reuseable_files/footer.html');
?>
    <!--Admission Form -->
    <?php 
       include('addmission_form/admission_form.html'); 
        ?>
<!--Form End-->  

    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
<script src="script/fixed-nav.js"></script>  
</body>
</html>
