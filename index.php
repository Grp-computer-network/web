<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thiruthangal Nadar college </title>
<link href="css/custom-styles.css" rel="stylesheet">
    <!--Main style sheets for nav-bar anad body content-->
    <link rel="stylesheet" href="css/home-content-style/styles.css">
    <!--Style for the banner(moving image after the nav-bar)-->
    <link rel="stylesheet" href="css/home-content-style/banner.css">
    <!--style for companies visted below the moving image -->
    <link rel="stylesheet" href="css/home-content-style/companies-visted.css">
    <!--style campus tour and events section-->
    <link rel="stylesheet" href="css/home-content-style/campus-events.css">
    <!--style for college management msg content -->
    <link rel="stylesheet" href="css/home-content-style/management-msg.css">
    <!--style for icons imported-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!--style for school of execellence-->
    <link rel="stylesheet" href="css/home-content-style/schools-of-excellence.css">
    <!--style for top recrutiers this content is in above the footer section-->
    <link rel="stylesheet" href="css/home-content-style/top-recruiters.css">
    <!--style for foooter-->
    <link rel="stylesheet" href="css/home-content-style/footer.css">
    <!--style for the pop events-->
    <link rel="stylesheet" href="css/home-content-style/popup.css">
    <link rel="stylesheet" href="css/home-content-style/addmission.css">
</head>

<body>
    <!-- Header Section -->
  <?php
  include("header.html");
  ?>
  
    <!-- End-Header Section -->
   <!--Hero Banner-->         
   <section class="hero-banner">
    <div class="slideshow-container">
        <div class="marquee-container">
            
        <!-- Slide 1 -->
        <div class="mySlides fade">
            <img src="./assets/carosule/1.png" alt="Slide 1" style="width:100%">
            <div class="text">Welcome to Thiruthangal nadar college</div>
        </div>
        
        <!-- Slide 2 -->
        <div class="mySlides fade">
            <img src="./assets/carosule/2.png" alt="Slide 2" style="width:100%">
            <div class="text">Empowering Education</div>
        </div>
        
        <!-- Slide 3 -->
        <div class="mySlides fade">
            <img src="./assets/carosule/3.png" alt="Slide 3" style="width:100%">
            <div class="text">Innovating the Future</div>
        </div>
        <div class="mySlides fade">
            <img src="./assets/carosule/4.png" alt="Slide 3" style="width:100%">
            <div class="text">Innovating the Future</div>
        </div>
        
        <div class="mySlides fade">
            <img src="./assets/carosule/5.png" alt="Slide 3" style="width:100%">
            <div class="text">Innovating the Future</div>
        </div>
        
        <div class="mySlides fade">
            <img src="./assets/carosule/6.png" alt="Slide 3" style="width:100%">
            <div class="text">Innovating the Future</div>
        </div>

        
        <!-- Navigation Dots -->
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
</section>

   <!--Hero Banner End-->   
<!------------------------------------------------------------------------------------------------ -->

    <!--  companies visisted -->
            <!---  companies visited -->
            <div class="counter-container">
                <div class="counter">
                    <div id="companiesVisited" class="counter-value">0+</div>
                    <i class="fa-regular fa-building"></i> <h1 class="counter-title">Companies Visited</h1>
                </div>
        
                <div class="counter">
                    <div id="studentsPlaced" class="counter-value">0+</div>
                    <i class="fa-solid fa-users-line"></i><h1 class="counter-title">No Of Students Placed</h1>
                    </div>
        
                <div class="counter">
                    <div id="studentsWithOffers" class="counter-value">0+</div>
                    <i class="fa-regular fa-user"></i>  <h1 class="counter-title">Students With Multiple Offers</h1>
                </div>
        
                <div class="counter">
                    <div id="highestPackage" class="counter-value">0</div>
                    <i class="fa-solid fa-road"></i>  <h1 class="counter-title">Highest Package For Current Year</h1>
                </div>
            </div>
<!------------------------------------------------------------------------------------------------ -->
            <!--Campus tour -->
            <div class="container-5">
                <div class="left-section">
                    <div class="video-wrapper">
                        <video autoplay muted controls>
                            <source src="./assets/img/TNC-2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="academic-info">
                        <h3>Academic Calendar</h3>
                        <p>2024-2025</p>
                        <a href="" class="cta-button">Campus Tour</a>
                    </div>
                </div>
                  <!-- on the <p></p> add our recent events and news-->
                <div class="right-section">
                    <h2>Current News & Events</h2>
                    <div class="events-wrapper">
                        <ul class="events-list">
                            <li class="event-item">
                                <span class="date">05 Sep</span>
                                <p>Teachers' Day</p>
                            </li>
                            <li class="event-item">
                                <span class="date">06 Sep</span>
                                <p>Friday Mass - AICUF</p>
                            </li>
                            <li class="event-item">
                                <span class="date">08 Sep</span>
                                <p>World Literacy Day</p>
                            </li>
                            <li class="event-item">
                                <span class="date">10 Sep</span>
                                <p>Mentoring Program</p>
                            </li>
                            <li class="event-item">
                                <span class="date">12 Sep</span>
                                <p>Sports Day</p>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="annual-calendar-btn">Annual Academic Calendar 2024-25 →</a>
                </div>
            </div>        
<!------------------------------------------------------------------------------------------------ -->

             <!--Management message --> 
            <div class="profile-section">
                <div class="college-info-1">
                    <h2>Thiruthangal Nadar college</h2>
                    <p> Thiruthangal Nadar College is renowned for its commitment to academic excellence and holistic student development. Our programs are designed to foster critical thinking, creativity, and a passion for lifelong learning. We aim to equip students with the skills needed to thrive in a dynamic and ever-evolving world.
                    </p>
                    <div class="accreditation">
                        <img src="./assets/img/Naac.logo.jpg" alt="NAAC Accreditation Badge">
                        <span>CGPA 3.68 - B++</span> 
                    </div>
                    <h2>Vision</h2>
                    <p>To disseminate knowledge and foster in our students positive and critical thinking besides intellectual skils to become empowered beings.</p>
                    <h2>Mission</h2>
                    <p>To provide quality and need-based education to student with faclities.</p>
                </div>

            
                <div class="profile-cards">
                    
                    <div class="profile-card">
                        <img src="./assets/img/Thiru.A.Narayana-Murthy-Secretary.jpg" alt="Vice Principal">
                        <h3>Secretary</h3>
                        <p>Thiru A.Narayana Murthy<br>MBA, NET, Ph.D.</p>
                        <button>Message from Secretary</button>
                    </div>
                    <div class="profile-card">
                        <img src="./assets/img/principal.jpeg" alt="Principal">
                        <h3>Principal</h3>
                        <p>Dr. V. DEVI <br>M.Com., M.Phil., Ph.D.</p>
                        <button>Message from Principal</button>
                    </div>
                </div>
            </div>
<!------------------------------------------------------------------------------------------------ -->

            <!--Schools of excellence-->
            
    <div class="header-s-o-e">
        <h1>Center of Excellence</h1>
    </div>

    <div class="container-s-e-o">
        <div class="school-box">
            <img src="https://via.placeholder.com/150" alt="">
            <div class="school-content">
                <div class="school-name"  style="background-color: #0fc2c0;">TNC centre for Research</div>
                <div class="school-details">
                    <p>Dr. NAME</p>
                    <p>M.A., M.Phil., B.Ed., PGCTE</p>
                    <p>Dean - School of Languages</p>
                </div>
            </div>
        </div>

        <div class="school-box">
            <img src="https://via.placeholder.com/150" alt="Dr. J. Jayanthi">
            <div class="school-content">
                <div class="school-name" style="background-color: #0caba8;">TNC centre  for e-governance</div>
                <div class="school-details">
                    <p>Dr. NAME</p>
                    <p>M.Sc., M.Phil., Ph.D.</p>
                    <p>Dean - School of Sciences</p>
                </div>
            </div>
        </div>

        <div class="school-box">
            <img src="https://via.placeholder.com/150" alt="Dr. K. Shanthi">
            <div class="school-content">
                <div class="school-name" style="background-color: #008f8c;">TNC centre for skill development</div>
                <div class="school-details">
                    <p>Dr.NAME</p>
                    <p>M.Sc. (IT), Ph.D.</p>
                    <p>Dean - School of Humanities</p>
                </div>
            </div>
        </div>

        <div class="school-box">
            <img src="https://via.placeholder.com/150" alt="Dr. K. Umadevi">
            <div class="school-content">
                <div class="school-name" style="background-color:  #0fc2c0;">GNCIES</div>
                <div class="school-details">
                    <p>Dr.NAME</p>
                    <p>M.Com., M.Phil., Ph.D.</p>
                    <p>Dean - School of Commerce</p>
                </div>
            </div>
        </div>

        <div class="school-box">
            <img src="https://via.placeholder.com/150" alt="Dr. Shakila M.K">
            <div class="school-content">
                <div class="school-name" style="background-color:  #0caba8;">TNC Media centre</div>
                <div class="school-details">
                    <p>Dr. NAME</p>
                    <p>MBA, M.Phil.</p>
                    <p>Dean - School of Management</p>
                </div>
            </div>
        </div>

        <div class="school-box">
            <img src="https://via.placeholder.com/150" alt="Dr. S. Nirmala Devi">
            <div class="school-content">
                <div class="school-name" style="background-color:  #008f8c;">GNCCOI</div>
                <div class="school-details">
                    <p>Dr. NAME</p>
                    <p>MCA, M.Phil., Ph.D.</p>
                    <p>Dean - School of IT</p>
                </div>
            </div>
        </div>
    </div>
<!------------------------------------------------------------------------------------------------ -->

    <!--TOP Recruiters-->
    <div class="recruiters-section-1"></div>
    <center>
        <h2 style="color: #003366; font-size: 30px;">Our Top Recruiters</h2>
    </center>
        <div class="scroll-container-1">
            <div class="scroll-content-1">
                <img src="./assets/top-recuriters-img/accealtcare1.png" alt="Recruiter 1">
                <img src="./assets/top-recuriters-img/apolli1.jpg" alt="Recruiter 2">
                <img src="./assets/top-recuriters-img/cap.jpg" alt="Recruiter 3">
                <img src="./assets/top-recuriters-img/cl1.png" alt="Recruiter 4">
                <img src="./assets/top-recuriters-img/icici.jpg" alt="Recruiter 5">
                <img src="./assets/top-recuriters-img/infy.jpg" alt="Recruiter 5">
                <img src="./assets/top-recuriters-img/justdial.jpg" alt="Recruiter 5">
                <img src="./assets/top-recuriters-img/Pyroferus-Image.png" alt="Recruiter 5">
                <img src="./assets/top-recuriters-img/tcs1.png" alt="Recruiter 5">
                <img src="./assets/top-recuriters-img/tmb1.png" alt="Recruiter 5">
                <img src="./assets/top-recuriters-img/yes-300x117.png" alt="Recruiter 5">
                <!-- Add more recruiter logos here -->
            </div>
        </div>
    </div>
<!------------------------------------------------------------------------------------------------ -->

<!-- footer-->
 <?php
   include("footer.html");
 ?>    
    <!--Pop-up Poster -->
<div id="popupPoster" class="modal">
    <div class="modal-content">
      <span class="close-btn">&times;</span>
      <img src="./assets/img/Index_Page_Admission_Popup-1024x1024.jpg" alt="College Poster" class="poster-image">
    </div>
  </div>
<!--------------------------------------------------------------------------------------------------->
<!--Modal Pop-up Poster end-->

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

<script  src="./script/script.js"></script>
<script src="./script/addmission.js"></script>
<script src="script/fixed-nav.js"></script>   
</body>
</html>



