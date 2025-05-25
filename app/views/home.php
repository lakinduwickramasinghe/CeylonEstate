<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    define('BASE_URL', '/ceylonestatefinal');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate Homepage</title>
    <link href="<?php echo BASE_URL . "/public/css/styles.css" ?>" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header -->
    <?php require __DIR__ . '/../views/includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="py-12 sm:py-16 text-center relative">
        <div class="absolute inset-0 z-0" style="background-image: url('/CeylonEstateFinal/public/images/bg01.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="absolute inset-0 bg-black opacity-40"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-3xl sm:text-4xl font-bold mb-4 text-white">FIND YOUR DREAM HOME</h1>
            <p class="text-base sm:text-lg mb-6 sm:mb-8 text-white">Now you can save yourself the stress, time, and hidden costs, with hundreds of homes for you to choose from.</p>

            <div class="max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                <div class="relative rounded-lg overflow-hidden shadow-lg group">
                    <div class="absolute inset-0 z-0" style="background-image: url('/CeylonEstateFinal/public/images/property_sale.jpg'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1A5C38]/80 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                    </div>
                    <div class="relative z-10 p-4 sm:p-6 flex flex-col items-center justify-center h-40 sm:h-48">
                        <h3 class="text-lg sm:text-xl font-bold text-white mb-4">Buy Your Dream Home</h3>
                        <a href="/ceylonestatefinal/public/forsale" class="white-button">Explore For Sale</a>
                    </div>
                </div>
                <div class="relative rounded-lg overflow-hidden shadow-lg group">
                    <div class="absolute inset-0 z-0" style="background-image: url('/CeylonEstateFinal/public/images/property_rent.jpg'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1A5C38]/80 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>
                    </div>
                    <div class="relative z-10 p-4 sm:p-6 flex flex-col items-center justify-center h-40 sm:h-48">
                        <h3 class="text-lg sm:text-xl font-bold text-white mb-4">Rent Your Perfect Space</h3>
                        <a href="/ceylonestatefinal/public/forrent" class="white-button">Explore For Rent</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!-- Properties For Sale Section -->
    <section class="py-12 sm:py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-2xl sm:text-3xl font-bold mb-6 sm:mb-8 text-center text-[#1A5C38]">Properties For Sale</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                <?php 
                foreach($forsale as $listing) {
                    $imageData = base64_encode($listing['ImageInfo']);
                    $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                    require __DIR__ . '/../views/propertycard.php';
                }
                ?>
            </div>
            <div class="mt-6 sm:mt-8 flex justify-center">
                <a href="/ceylonestatefinal/public/forsale" class="green-button">View All For Sale</a>
            </div>
        </div>
    </section>

    <!-- Properties For Rent Section -->
    <section class="py-12 sm:py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-2xl sm:text-3xl font-bold mb-6 sm:mb-8 text-center text-[#1A5C38]">Properties For Rent</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                <?php 
                foreach($forrent as $listing) {
                    require __DIR__ . '/../views/propertycard.php';
                }
                ?>              
            </div>
            <div class="mt-6 sm:mt-8 flex justify-center">
                <a href="/ceylonestatefinal/public/forrent" class="green-button">View All For Rent</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 sm:py-20 relative overflow-hidden">
        <div class="absolute inset-0 z-0" style="background-image: url('/ceylonestatefinal/public/images/bg01.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-80"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 items-center">
                <div class="text-white text-center lg:text-left animate-fade-in" style="animation-delay: 0.2s;">
                    <h3 class="text-3xl sm:text-4xl font-extrabold mb-6 sm:mb-8 drop-shadow-lg">Need to Talk?</h3>
                    <p class="text-xl sm:text-2xl mb-4 sm:mb-6 drop-shadow">We’re Here to Help You</p>
                    <div class="space-y-3 sm:space-y-4">
                        <p class="text-base sm:text-lg">Contact Us:</p>
                        <p class="text-base sm:text-lg">No 645, 9 Kings Street, Matale, Sri Lanka</p>
                        <p class="text-base sm:text-lg">Phone: <a href="tel:+94645923215" class="underline hover:text-gray-300">645 923 215</a></p>
                        <p class="text-base sm:text-lg">Email: <a href="mailto:help@ceylonestate.lk" class="underline hover:text-gray-300">help@ceylonestate.lk</a></p>
                        <p class="text-base sm:text-lg mt-4 sm:mt-6">Social Media:</p>
                        <p class="text-base sm:text-lg">ceylonestate.matale</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white/80 backdrop-blur-md p-6 sm:p-8 rounded-xl shadow-xl w-full max-w-md mx-auto lg:mx-0 animate-fade-in" style="animation-delay: 0.4s;">
                    <h3 class="text-xl sm:text-2xl font-bold text-[#1A5C38] mb-4 sm:mb-6">Got a Question?</h3>
                    <form action="" method="POST" class="space-y-4 sm:space-y-6">
                        <div class="relative mb-4 sm:mb-6">
                            <input type="email" name="email" placeholder="Your email..." required class="w-full p-3 sm:p-4 pl-10 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38] placeholder-gray-500 transition-all duration-300 text-sm sm:text-base">
                            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m9-9h-1m-1-1v-1a1 1 0 00-1-1H9a1 1 0 00-1 1v1m1 1v1a1 1 0 001 1h1m-1-1v-1"></path>
                            </svg>
                        </div>
                        <div class="relative mb-4 sm:mb-6">
                            <textarea name="question" placeholder="Your question..." required class="w-full p-3 sm:p-4 pt-8 sm:pt-10 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38] h-32 sm:h-40 placeholder-gray-500 transition-all duration-300 text-sm sm:text-base"></textarea>
                            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M9 16h.01M13 16h.01M7 20h10a2 2 0 002-2V6a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <button type="submit" class="w-full bg-[#1A5C38] text-white py-2 sm:py-3 rounded-lg hover:bg-[#154c2f] transition-all duration-300 font-semibold shadow-md text-sm sm:text-base">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>