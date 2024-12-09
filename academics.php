<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics</title>
    <!--Main style sheets for nav-bar anad body content-->
    <link rel="stylesheet" href="css/home-content-style/styles.css">
    <!--style for foooter-->
    <link rel="stylesheet" href="css/home-content-style/footer.css">
    <!--style for the pop events-->
    <link rel="stylesheet" href="css/home-content-style/popup.css">
    <link rel="stylesheet" href="css/home-content-style/addmission.css">
    <!--style for icons imported-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/home-content-style/footer.css">
    <link rel="stylesheet" href="css/about-content/about.css">
    <link rel="stylesheet" href="css/IQAC/iqac.css">
</head>
<body>
<?php
include("reuseable_files/header.html");
?>    
<div class="title-iqac">
    <h1 style='font-size:23px; font-weight:bold;'>Academics</h1>
</div>
<!-- IQAC Section -->
<section id="iqac-container">
    <!-- Left-side IQAC Navigation -->
    <nav id="iqac-nav">
        <ul>
            <li><a href="academics/Course_offered.html" class="iqac-link">Cousre Offered</a></li>
            <li><a href="academics/E-content.html" class="iqac-link">E-content</a></li>
            <li><a href="academics/academics-calender.html" class="iqac-link">Aacdemics  calender</a></li>
            <li><a href="academics/academics-collabration.html" class="iqac-link">Aacdemics collabration</a></li>
            <li><a href="academics/statutes.html" class="iqac-link">statutes</a></li>
            <li><a href="academics/libary.html" class="iqac-link">libary</a></li>
        </ul>
    </nav>

    <!-- Main Content Section where the IQAC content will be loaded -->
    <div id="iqac-content" class="about">
        <h2>Academics</h2>
        <hr>
        <p style="font-size: 1.3rem;">
        At Thiruthangal Nadar College, we are committed to fostering academic excellence and holistic development. Our diverse range of undergraduate (UG) and postgraduate (PG) programs are designed to meet industry demands while nurturing students' intellectual and personal growth.  
        </p>
        <p style="font-size: 1.3rem;">
            The college was founded by the *Chennaivazh Thiruthangal Hindu Nadar Uravinmurai Dharma Fund, driven by a mission to support the underprivileged student community. The dedicated management is committed to providing accessible education, fostering students' intellectual and personal growth through the college’s motto, *"Knowledge is Power."** Our primary focus is to ignite the minds of students, dispelling ignorance and promoting enlightenment through a comprehensive educational experience.
        </p>
        <h2>Academic Programs</h2> <hr>
        <p style="font-size: 1.3rem;">
            We offer a variety of *undergraduate (UG)* and *postgraduate (PG)* programs in the arts and sciences. These programs are designed to equip students with the knowledge, skills, and values necessary for personal and professional success. Accredited with a *B++* rating, Thiruthangal Nadar College has earned recognition for its commitment to academic excellence.
        </p>
        <h2>Student Life and Extracurricular Activities</h2><hr>
        <p style="font-size: 1.3rem;">
            We believe in holistic development, and students are encouraged to participate in various clubs and organizations, including the *Eco Club, **Student Development Council (SDC), **National Service Scheme (NSS), and **National Cadet Corps (NCC)*. These activities promote leadership, environmental awareness, and civic responsibility.
        </p>
    </div>
</section>
  <?php 
  include("reuseable_files/footer.html");
  ?>     
             <!-- ----------------------- admission pop-up     -------------------------------------->
              
             <?php 
        include('reuseable_files/admmision-pop_up.html');  
        ?>
    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
<script src="script/fixed-nav.js"></script>  
</body>
</html>