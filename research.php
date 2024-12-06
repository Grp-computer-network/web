<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>research</title>
    <link rel="stylesheet" href="css/IQAC/iqac.css"> <!-- Your existing CSS file -->
    <link rel="stylesheet" href="css/home-content-style/styles.css">
    <link rel="stylesheet" href="css/home-content-style/footer.css">
    <link rel="stylesheet" href="css/home-content-style/addmission.css">
    <link href="css/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <?php 
    include('reuseable_files/header.html');
    ?> 

<div class="title-iqac">
        <h1 style='font-size:23px; font-weight:bold;'>RESEARCH</h1>
    </div>
    <!-- IQAC Section -->
    <section id="iqac-container">
        <!-- Left-side IQAC Navigation -->
        <nav id="iqac-nav">
            <ul>
                <li><a href="research/research_guidelines.html" class="iqac-link">Research Guidelines</a></li>
                <li><a href="research/phd_admission_guidelines.html" class="iqac-link">PH.D Admission Guidelines</a></li>
                <li><a href="research/central_facilities.html" class="iqac-link">Central Facilities</a></li>
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
    include("reuseable_files/footer.html");
    ?>
    
                     <!-- admission pop-up-->

                     <?php 
        include('reuseable_files/admmision-pop_up.html');  
        ?>
        
    <script src="script/addmission.js"></script>
    <script src="script/iqac.js"></script>
<script src="script/fixed-nav.js"></script>  
</body>
</html>