<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQAC - Thiruthangal Nadar College</title>
    <link rel="stylesheet" href="iqac.css"> <!-- Your existing CSS file -->
    <link rel="stylesheet" href="css/home-content-style/styles.css">
    <link rel="stylesheet" href="css/home-content-style/footer.css">
    <link rel="stylesheet" href="css/home-content-style/addmission.css">
    


</head>
<body>
    <?php 
    include("header.html");
    ?>

    <div class="title-iqac">
        <h1>ADMISSION</h1>
    </div>
    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="admission/courses_offered.html" class="iqac-link">Programme Offered</a></li>
                <li><a href="../IQAC/AQAR.html" class="iqac-link">Guideliness For Admission</a></li>
                <li><a href="../IQAC/Best_Practices.html" class="iqac-link">Online Application</a></li>



                <!-- More Sub-Navigation Links -->
            </ul>
        </nav>

        <!-- Main Content Section where the IQAC content will be loaded -->
        <div id="main-content">
            <h2>Welcome to IQAC</h2>
            <p>This section will dynamically update when you click on the sub-navigation links.</p>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">
            <!-- About Section -->
            <div class="footer-section about">
                <h3>About Us</h3>
                <p>
                    Thiruthangal Nadar College is dedicated to delivering quality education and fostering an environment conducive to academic excellence and personal growth.
                </p>
            </div>
    
            <!-- Quick Links -->
            <div class="footer-section quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Admissions</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
    
            <!-- Contact Information -->
            <div class="footer-section contact">
                <h3>Contact Us</h3>
                <p>
                    Thiruthangal Nadar College<br>
                    Selavayal, Near Kannadasan Nagar, Chennai<br>
                    Phone: 044 – 25941717 / 044 – 25942525<br>
                    Email: <a href="mailto:principal@thiruthangalnadarcollege.edu.in">principal@thiruthangalnadarcollege.edu.in</a>
                </p>
                <div class="social-links">
                    <a href="https://www.facebook.com/people/Tnc-Arts/pfbid02LgEP44ZPwVFyL3fxspKVGWHezXGR9cGDg3ocPWMov3txYePpXHzQFNiZCSmxVvWal/?rdid=RTSraMyE9t2mWfVj&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2FjR4ZAtfitS9vTjkk"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.youtube.com/@thiruthangalnadarcollege9032"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/thiruthangal_nadar_college_97/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Thiruthangal Nadar College. All Rights Reserved.
        </div>
        <!-- Your existing footer content here -->
    </footer>

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

    <script src="iqac.js"></script> <!-- JavaScript file -->
</body>
</html>
