<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    
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
include("header.html");
?>    
<!------------------------------------------------------------------------------------------------ -->
<div class="title-iqac">
    <h1 style='font-size:23px; font-weight:bold;'>About us</h1>
</div>
<!-- IQAC Section -->
<section id="iqac-container">
    <!-- Left-side IQAC Navigation -->
    <nav id="iqac-nav">
        <ul>
            <li><a href="about/history.html" class="iqac-link">History</a></li>
            <li><a href="about/msg-principal-serectary.html" class="iqac-link">Institutional Development Plan</a></li>
            <li><a href="about/committee-msg.html" class="iqac-link">Committee of Management</a></li>
            <li><a href="about/insitution-polices.html" class="iqac-link">Institution Policies</a></li>
            <li><a href="about/organogram.html" class="iqac-link">Organogram</a></li>
            <li><a href="about/annual-reports.html" class="iqac-link">Annual Reports</a></li>
            <li><a href="about/accreditation.html" class="iqac-link">Accreditation</a></li>
        </ul>
    </nav>

    <!-- Main Content Section where the IQAC content will be loaded -->
    <div id="iqac-content" class="about">
        <h2>About us</h2>
        <hr>
        <p style="font-size: 1.3rem;">
            
*Thiruthangal Nadar College*, established in 1997, is a leading co-educational private institution affiliated with the University of Madras. Initially founded as a men’s college, it transitioned to a co-educational institution in 2002, empowering women in North Chennai by providing them with quality education and expanding opportunities.
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
  include("footer.html");
  ?>     


             <!-- ----------------------- admission pop-up     -------------------------------------->
              
<div id="admissionModal" class="form">
    <div class="form-model">
      <span class="close-Btn">&times;</span>
      <h2>Admission Form</h2>
      <form id="admissionForm">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>
        
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        
        <div class="form-group">
          <label for="course">Course Interested In:</label>
          <select id="course" name="course" required>
            <option value="" disabled selected>Select a course</option>
            <option value="B.Com">B.Com</option>
            <option value="B.Sc">B.Sc</option>
            <option value="BA">BA</option>
            <option value="MBA">MBA</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="4" placeholder="Additional details (optional)"></textarea>
        </div>
  
        <button type="submit" class="submit-btn">Submit</button>
      </form>
    </div>
  </div>
    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
</body>
</html>