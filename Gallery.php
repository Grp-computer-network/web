<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <?php 
    include('reuseable_files/style-php.html');
    ?>
   </head>
<body>

    <?php
    include("reuseable_files/header.html");
    ?> <br>
    <!-- Header -->
    <header class="bg-blue-600 text-white py-5 text-center">
        <h1 class="text-3xl font-bold">College Event Gallery</h1>
        <p class="mt-2 text-lg">Explore highlights from various college events</p>
    </header>
    <section class="max-w-6xl mx-auto py-10 px-5">
        <!-- Tabs for Event Categories -->
        <div class="mb-6 text-center">
            <button id="tab-1" class="tab-btn bg-blue-600 text-white py-2 px-4 rounded-md mx-2 active ">
                kamarajar Birthday
            </button>
            <button id="tab-2" class="tab-btn bg-gray-300 text-gray-700 py-2 px-4 rounded-md mx-2">
                Cultural Fest(UKTI-2K24)
            </button>
            <button id="tab-3" class="tab-btn bg-gray-300 text-gray-700 py-2 px-4 rounded-md mx-2">
                27th Sports Day
            </button>
            <button id="tab-4" class="tab-btn bg-gray-300 text-gray-700 py-2 px-4 rounded-md mx-2">
                Freshers Day
            </button>
        </div>
        <!-- Gallery for Tabs -->
        <div id="content-1" class="tab-content">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Cultural Fest Images -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/COLLEGE_WEB/assets//Gallery-clg//kamarajar_birthday_pics//PIcture-1.jpeg" alt="Event 1" class="h-50 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">kamarajar-birthday</h3>
                        <p class="text-xs text-gray-500">Lighting up the kothuvelaku</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/COLLEGE_WEB/assets//Gallery-clg///kamarajar_birthday_pics///picture-2.jpeg" alt="Event 2" class="h-50 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">kamarajar-birthday</h3>
                        <p class="text-xs text-gray-500">Management members</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/COLLEGE_WEB/assets//Gallery-clg//kamarajar_birthday_pics//picture-3.jpeg" alt="Event 3" class="h-50 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">kamarajar-birthday</h3>
                        <p class="text-xs text-gray-500">kamarajar statue</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/COLLEGE_WEB/assets//Gallery-clg//kamarajar_birthday_pics//picture-4.jpeg" alt="Event 3" class="h-70 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">kamarajar-birthday</h3>
                        <p class="text-xs text-gray-500">kamarajar statue</p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div id="content-2" class="tab-content hidden">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Science Expo Images -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/COLLEGE_WEB/assets//Gallery-clg//UKTI_2K24//UKTI_2K24_10-768x512.jpg" alt="Event 4" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Robotics</h3>
                        <p class="text-xs text-gray-500">Robotic innovations displayed.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/COLLEGE_WEB/assets//Gallery-clg//UKTI_2K24//UKTI_2K24_9-768x512.jpg" alt="Event 5" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">AI Presentation</h3>
                        <p class="text-xs text-gray-500">AI-based projects on display.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/COLLEGE_WEB/assets///Gallery-clg//UKTI_2K24//UKTI_2K24_8-768x512.jpg" alt="Event 6" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Innovative Models</h3>
                        <p class="text-xs text-gray-500">Creative science projects.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/COLLEGE_WEB/assets//Gallery-clg//UKTI_2K24//UKTI_2K24_7-scaled.jpg" alt="Event 4" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Robotics</h3>
                        <p class="text-xs text-gray-500">Robotic innovations displayed.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/COLLEGE_WEB/assets//Gallery-clg//UKTI_2K24//UKTI_2K24_16-768x512.jpg" alt="Event 4" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Robotics</h3>
                        <p class="text-xs text-gray-500">Robotic innovations displayed.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/COLLEGE_WEB/assets//Gallery-clg//UKTI_2K24//UKTI_2K24_11-768x512.jpg" alt="Event 4" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Robotics</h3>
                        <p class="text-xs text-gray-500">Robotic innovations displayed.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="content-3" class="tab-content hidden">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Sports Day Images -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://i.ibb.co/RYL0tP4/event6.jpg" alt="Event 6" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Cricket Match</h3>
                        <p class="text-xs text-gray-500">Intense cricket tournament.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://i.ibb.co/RNkk6L0/img6.jpg" alt="Event 7" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Relay Race</h3>
                        <p class="text-xs text-gray-500">Students competing in athletics.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://i.ibb.co/0mW8Xv8/event2.jpg" alt="Event 8" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Basketball Game</h3>
                        <p class="text-xs text-gray-500">Exciting basketball match.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-4" class="tab-content">
        <div class="relative w-full max-w-3xl mx-auto overflow-hidden">
  <!-- Carousel Content -->
      <div id="carousel" class="flex transition-transform duration-300 ease-in-out">
        <div class="w-full flex-shrink-0">
          <img src="/COLLEGE_WEB/assets//Gallery-clg//Freshers_day_pics//TNC_Freshers_Day_2024_1-scaled.jpeg" alt="Slide 1" class="w-full">
        </div>
        <div class="w-full flex-shrink-0">
          <img src="/COLLEGE_WEB/assets//Gallery-clg//Freshers_day_pics//TNC_Freshers_Day_2024_3-768x432.jpeg" alt="Slide 2" class="w-full">
        </div>
        <div class="w-full flex-shrink-0">
          <img src="/COLLEGE_WEB/assets//Gallery-clg//Freshers_day_pics//TNC_Freshers_Day_2024_4-768x432.jpeg" alt="Slide 3" class="w-full">
        </div> 
        <div class="w-full flex-shrink-0">
          <img src="/COLLEGE_WEB/assets//Gallery-clg//Freshers_day_pics//TNC_Freshers_Day_2024_5-scaled.jpeg" alt="Slide 4" class="w-full">
       </div>
  <!-- Buttons -->
  <button 
    id="prevButton" 
    class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-md hover:bg-gray-700">
    &#10094; <!-- Left Arrow -->
  </button>
  <button 
    id="nextButton" 
    class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-md hover:bg-gray-700">
    &#10095; <!-- Right Arrow -->
  </button>
</div>
     </div>
        </div>

    </section>
    <!-- End Image Grid -->
    <?php
    include('reuseable_files/footer.html');
    ?>

    <!--Admission form-->
    <?php 
        include('addmission_form/admission_form.html');  
        ?>

<script  src="/COLLEGE_WEB/script//gallery_script.js"></script>
<script src="script/fixed-nav.js"></script>  
<script src="./script/addmission.js"></script>
</body>

</html>