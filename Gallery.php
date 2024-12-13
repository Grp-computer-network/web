<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <?php 
    include('reuseable_files/style-php.html');
    ?>
   <link rel="stylesheet" href="css/tailwind.css">
   </head>
<body>

    <?php
    include("reuseable_files/header.html");
    ?> <br>
  <header class="bg-[#a30000] text-white py-4">
    <div class="container mx-auto text-center">
      <h1 class="text-2xl font-bold" style="font-size: 30px;">Gallery</h1>
    </div>
  </header><br>
    <!-- Buttons for categories -->
    <div class="flex justify-center space-x-4 mb-6">
        <button class="category-btn bg-[#a30000] text-white px-4 py-2 rounded shadow-md" data-category="cultural">
            UKTI 2K24
        </button>
        <button class="category-btn bg-[#a30000] text-white px-4 py-2 rounded shadow-md" data-category="sports">
            Sports DAY
        </button>
        <button class="category-btn bg-[#a30000] text-white px-4 py-2 rounded shadow-md" data-category="freshers">
            Freshers Day
        </button>
        <button class="category-btn bg-[#a30000] text-white px-4 py-2 rounded shadow-md" data-category="events">
            KAMARAJAR BIRTH-DAY
        </button>
    </div>

    <!-- Carousel -->
    <div class="relative max-w-4xl mx-auto overflow-hidden">
        <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
            <!-- Default images (Cultural) -->
            <div class="flex-shrink-0 w-full flex justify-center items-center bg-gray-200">
                <img src="https://via.placeholder.com/300x200?text=Cultural+1" alt="Cultural 1" class="rounded shadow-md" />
            </div>
            <div class="flex-shrink-0 w-full flex justify-center items-center bg-gray-200">
                <img src="https://via.placeholder.com/300x200?text=Cultural+2" alt="Cultural 2" class="rounded shadow-md" />
            </div>
            <div class="flex-shrink-0 w-full flex justify-center items-center bg-gray-200">
                <img src="https://via.placeholder.com/300x200?text=Cultural+3" alt="Cultural 3" class="rounded shadow-md" />
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-[#a30000] text-white p-2 rounded-full shadow-md z-10"
            id="prev">
            &larr;
        </button>
        <button
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-[#a30000] text-white p-2 rounded-full shadow-md z-10"
            id="next">
            &rarr;
        </button>
    </div>
</div>
<br>
<?php
    include('reuseable_files/footer.html');
    ?>

    <!--Admission form-->
    <?php 
        include('addmission_form/admission_form.html');  
        ?>


<script>
    const carousel = document.getElementById('carousel');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const categoryButtons = document.querySelectorAll('.category-btn');

    // Category Images
    const categories = {
        cultural: [
            "/COLLEGE_WEB/assets/Gallery-clg/UKTI_2K24/UKTI_2K24_16-768x512.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/UKTI_2K24/UKTI_2K24_7-scaled.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/UKTI_2K24/UKTI_2K24_8-768x512.jpg",
            "/COLLEGE_wEB/assets/Gallery-clg/UKTI_2K24/UKTI_2K24_9-768x512.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/UKTI_2K24/UKTI_2K24_10-768x512.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/UKTI_2K24/UKTI_2K24_11-768x512.jpg",
        ],
        sports: [
            "/COLLEGE_WEB/assets/Gallery-clg/sports_day_pics/27_TH_Sports_Day_1-768x511.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/sports_day_pics/27_TH_Sports_Day_2-768x511.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/sports_day_pics/27_TH_Sports_Day_4-768x511.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/sports_day_pics/27_TH_Sports_Day_10-768x511.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/sports_day_pics/27_TH_Sports_Day_14-768x511.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/sports_day_pics/27_TH_Sports_Day_15-768x511.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/sports_day_pics/27_TH_Sports_Day_16-768x511.jpg",
            "/COLLEGE_WEB/assets/Gallery-clg/sports_day_pics/27_TH_Sports_Day_17-768x511.jpg"
        ],
        freshers: [
            "/COLLEGE_WEB/assets/Gallery-clg/Freshers_day_pics/TNC_Freshers_Day_2024_1-scaled.jpeg",
            "/COLLEGE_WEB/assets/Gallery-clg/Freshers_day_pics/TNC_Freshers_Day_2024_3-768x432.jpeg",
            "/COLLEGE_WEB/assets/Gallery-clg/Freshers_day_pics/TNC_Freshers_Day_2024_4-768x432.jpeg",
            "/COLLEGE_WEB/assets/Gallery-clg/Freshers_day_pics/TNC_Freshers_Day_2024_5-scaled.jpeg"
        ],
        events: [
            "/COLLEGE_WEB/assets/Gallery-clg/kamarajar_birthday_pics/PIcture-1.jpeg",
            "/COLLEGE_WEB/assets/Gallery-clg/kamarajar_birthday_pics/picture-2.jpeg",
            "/COLLEGE_WEB/assets/Gallery-clg/kamarajar_birthday_pics/picture-3.jpeg",
            "/COLLEGE_WEB/assets/Gallery-clg/kamarajar_birthday_pics/picture-4.jpeg",
            "/COLLEGE_WEB/assets/Gallery-clg/kamarajar_birthday_pics/picture-5.jpeg"
        ]
    };

    let currentIndex = 0;

    // Update Carousel
    function updateCarousel() {
        const offset = -currentIndex * 100; // Move by 100% width per slide
        carousel.style.transform = `translateX(${offset}%)`;
    }

    // Load Images by Category
    function loadCategory(category) {
        currentIndex = 0;
        carousel.innerHTML = ''; // Clear current images

        categories[category].forEach((src) => {
            const div = document.createElement('div');
            div.className = "flex-shrink-0 w-full flex justify-center items-center bg-gray-200";
            div.innerHTML = `<img src="${src}" alt="${category}" class="rounded shadow-md" />`;
            carousel.appendChild(div);
        });

        updateCarousel();
    }

    // Button Event Listeners
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');
            loadCategory(category);
        });
    });

    // Navigation Event Listeners
    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex === 0) ? carousel.children.length - 1 : currentIndex - 1;
        updateCarousel();
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % carousel.children.length;
        updateCarousel();
    });

    // Load default category
    loadCategory('cultural');
</script>
<script  src="/COLLEGE_WEB/script//gallery_script.js"></script>
<script src="script/fixed-nav.js"></script>  
<script src="./script/addmission.js"></script>
</body>
</html>