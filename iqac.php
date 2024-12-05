<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQAC - Thiruthangal Nadar College</title>
    <link rel="stylesheet" href="css/IQAC/iqac.css">
    <!--Main style sheets for nav-bar anad body content-->
    <link rel="stylesheet" href="css/home-content-style/styles.css">
    <!--style for foooter-->
    <link rel="stylesheet" href="css/home-content-style/footer.css">
    <!--style for the pop events-->
    <link rel="stylesheet" href="css/home-content-style/popup.css">
    <link rel="stylesheet" href="css/home-content-style/addmission.css">
    <!--style for icons imported-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<?php
include("reuseable_files/header.html");
?>    
    <div class="title-iqac">
        <h1 style='font-size:23px; font-weight:bold;'>Internal Quality Assurance Cell</h1>
    </div>
    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="IQAC/About_IQAC.html" class="iqac-link">About IQAC</a></li>
                <li><a href="IQAC/AQAR.html" class="iqac-link">AQAR</a></li>
                <li><a href="IQAC/Best_Practices.html" class="iqac-link">Best Practices</a></li>
                <li><a href="IQAC/Feedback.html" class="iqac-link">Feedback</a></li>
                <li><a href="IQAC/Alumni.html" class="iqac-link">Alumni</a></li>
                <li><a href="IQAC/Gallery.html" class="iqac-link">Gallery</a></li>
                <li><a href="IQAC/Institutional_Distinctiveness.html" class="iqac-link">Institutional Distinctiveness</a></li>
                <li><a href="IQAC/IQAC_Committee_Members.html" class="iqac-link">IQAC Committee Members</a></li>
                <li><a href="IQAC/IQAC_Minutes_And_ATR.html" class="iqac-link">IQAC Minutes And ATR</a></li>
                <li><a href="IQAC/Quality_Initiatives.html" class="iqac-link">Quality Initiatives</a></li>
                <li><a href="IQAC/SSR_Cycle_II_Report.html" class="iqac-link">SSR Cycle II Report</a></li>
                <li><a href="IQAC/NIRF.html" class="iqac-link">NIRF</a></li>
                <li><a href="IQAC/Templates.html" class="iqac-link">Templates</a></li>
                <li><a href="IQAC/Internal_Complaint_Committee.html" class="iqac-link">Internal Complaint Committee</a></li>
                <li><a href="IQAC/MOU's.html" class="iqac-link">MOU's</a></li>
                <!-- More Sub-Navigation Links -->
            </ul>
        </nav>

        <!-- Main Content Section where the IQAC content will be loaded -->
        <div id="iqac-content">
            <h2>Welcome to IQAC</h2>   <br>
            <p style="font-size: 20px;padding: 10px;">IQAC would be looked upon as the prime quality sustenance measure.

                As providing quality education, adopting innovative teaching-learning methods, and assessing them is a continuous process, IQAC will be working with the HEI to support them throughout their teaching-learning journey.
                
                Let’s understand the concept of IQAC & how it can help institutions.</p>
        </div>
    </section>
<?php 
 include("reuseable_files/footer.html");
?>
        <!--Admission Form -->
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
  
<!--Form End-->
     <script src="script/script.js"></script>
    <script src="script/iqac.js"></script> <!-- JavaScript file -->
    <script src="script/addmission.js"></script>
    <script src="script/fixed-nav.js"></script>
</body>
</html>
