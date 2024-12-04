<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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
    include("header.html");
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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Cultural Fest Images -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://i.ibb.co/YPKJFbh/event1.jpg" alt="Event 1" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Cultural Fest - Dance</h3>
                        <p class="text-xs text-gray-500">An electrifying dance performance.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://i.ibb.co/0mW8Xv8/event2.jpg" alt="Event 2" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Cultural Fest - Music</h3>
                        <p class="text-xs text-gray-500">Mesmerizing musical evening.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://i.ibb.co/DbDRsNH/event3.jpg" alt="Event 3" class="h-40 w-full object-cover">
                    <div class="p-2">
                        <h3 class="text-sm font-bold">Cultural Fest - Art</h3>
                        <p class="text-xs text-gray-500">Students showcasing art pieces.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Image Grid -->
    <?php
    include('footer.html');
    ?>

    <!-- JavaScript -->
    <script>
        // Tab functionality
        const tabs = document.querySelectorAll('.tab-btn');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('bg-blue-600', 'text-white'));
                tab.classList.add('bg-blue-600', 'text-white');

                contents.forEach(content => content.classList.add('hidden'));
                contents[index].classList.remove('hidden');
            });
        });
    </script>
</body>

</html>