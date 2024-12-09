<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>campus life</title>
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
    <link rel="stylesheet" href="css/tailwind.css">
</head>
<body>
<?php
include("reuseable_files/header.html");
?>    
<!------------------------------------------------------------------------------------------------ -->
<div class="title-iqac">
    <h1 style='font-size:23px; font-weight:bold;'>Campus life</h1>
</div>
<!-- IQAC Section -->
<section id="iqac-container">
    <!-- Left-side IQAC Navigation -->
    <nav id="iqac-nav">
        <ul>
            <li><a href="campus_life/cultural_activites.html" class="iqac-link">Cultural Activities</a></li>
            <li><a href="campus_life/student_council.html" class="iqac-link">Student council</a></li>
            <li><a href="campus_life/student_support.html" class="iqac-link">Student support</a></li>
            <li><a href="campus_life/club_activities.html" class="iqac-link">Club activities</a></li>
            <li><a href="campus_life/infrastrcture.html" class="iqac-link">Infrastrcture</a></li>
            <li><a href="campus_life/extension_activities.html" class="iqac-link">Extension Activity</a></li>
        </ul>
    </nav>
    <!-- Main Content Section where the IQAC content will be loaded -->
    <div id="iqac-content" class="about">
        <!-- Header Section -->
  <header class="bg-green-600 text-white">
    <div class="container mx-auto p-6">
      <h1 class="text-3xl font-bold">Campus Life</h1>
      <p class="text-lg mt-2">Discover the vibrant life at Thiruthangal Nadar College.</p>
    </div>
  </header>

  <!-- About Campus Section -->
  <section class="container mx-auto py-10 px-4">
    <h2 class="text-2xl font-semibold mb-6 text-center text-green-600">Welcome to Our Campus</h2>
    <p class="text-lg text-gray-700 leading-relaxed text-center mb-8">
      Thiruthangal Nadar College provides a dynamic and inclusive campus experience. 
      From academics to extracurriculars, we ensure every student thrives in a supportive environment.
    </p>
    <div class="flex flex-wrap justify-center gap-8">
      <div class="bg-white shadow-lg rounded-lg p-6 w-80">
        <img src="/COLLEGE_WEB/assets//img//campus_life_pics//outdoor_stage.jpg" alt="Auditorium" class="rounded-md mb-4">
        <h3 class="text-xl font-bold text-green-600">State-of-the-Art Auditorium</h3>
        <p class="text-gray-600 mt-2">Our air-conditioned auditorium hosts various cultural and academic events.</p>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-6 w-80">
        <img src="/COLLEGE_WEB/assets//img//campus_life_pics//Gym.jpg" alt="Gym" class="rounded-md mb-4">
        <h3 class="text-xl font-bold text-green-600">Modern Gym Facilities</h3>
        <p class="text-gray-600 mt-2">Stay fit with our advanced gym equipment available for all students.</p>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-6 w-80">
        <img src="/COLLEGE_WEB/assets//img//campus_life_pics//ECO-GREEN.jpg" alt="Eco Club" class="rounded-md mb-4">
        <h3 class="text-xl font-bold text-green-600">Eco Club</h3>
        <p class="text-gray-600 mt-2">Join our eco club and contribute to a greener tomorrow.</p>
      </div>
    </div>
  </section>
  <!-- Events and Activities Section -->
  <section class="bg-green-100 py-10">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-semibold mb-6 text-center text-green-600">Events & Activities</h2>
      <div class="flex flex-wrap justify-center gap-8">
        <div class="bg-white shadow-md rounded-lg p-6 w-96">
          <h3 class="text-xl font-bold text-green-600">Annual Fest</h3>
          <p class="text-gray-600 mt-2">A grand celebration of culture, talent, and togetherness.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 w-96">
          <h3 class="text-xl font-bold text-green-600">Sports Meets</h3>
          <p class="text-gray-600 mt-2">Inter-departmental and inter-college tournaments in various sports.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 w-96">
          <h3 class="text-xl font-bold text-green-600">Workshops & Seminars</h3>
          <p class="text-gray-600 mt-2">Skill development sessions led by industry experts and alumni.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Campus Tour Call-to-Action -->
  <section class="bg-green-600 text-white py-10">
    <div class="container mx-auto text-center">
      <h2 class="text-2xl font-semibold mb-4">Take a Campus Tour</h2>
      <p class="text-lg mb-6">Experience the vibrant campus life at Thiruthangal Nadar College.</p>
      <a href="#" class="bg-white text-green-600 px-6 py-3 rounded-md font-bold hover:bg-green-500 hover:text-white transition">
        View Our Campus
      </a>
    </div>
  </section>
    </div>
</section>
  <?php 
  include("reuseable_files/footer.html");
  ?>     
  <!-- ----------------------- admission pop-up     -------------------------------------->
  <?php 
       include('addmission_form/admission_form.html');
        ?>
        
    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
<script src="script/fixed-nav.js"></script>  
</body>
</html>