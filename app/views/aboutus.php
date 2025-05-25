<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    define('BASE_URL', '/ceylonestatefinal');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - Who We Are?</title>
    <link href="<?php echo BASE_URL . "/public/css/styles.css" ?>" rel="stylesheet">
    <style>
        .bg-image {
            background-image: url('/CeylonEstateFinal/public/images/bg01.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-50">

    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>
    
    <main class="flex-1">

        <section class="bg-green-100 py-8 sm:py-12 px-4">
            <div class="container mx-auto text-center">
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-3 sm:mb-4">Who We Are?</h1>
                <p class="text-base sm:text-lg text-gray-600 mb-4 sm:mb-6 max-w-2xl mx-auto">We're a team of forward-thinkers redefining how properties are sold—empowering sellers with control, simplicity, and speed.</p>
                <div class="bg-gray-200 p-4 sm:p-6 rounded-lg shadow-md max-w-xl sm:max-w-2xl mx-auto">
                    <p class="text-gray-700 text-sm sm:text-base">At the heart of our platform is a simple idea: selling property shouldn't be complicated. We're here to streamline the process, giving property owners the tools to take charge of their listings without relying on middlemen. By blending user-friendly design with smart functionality, we aim to make property selling accessible, transparent, and efficient—just the way it should be.</p>
                </div>
            </div>
        </section>

        <section class="bg-image py-12 sm:py-16 relative">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4">
                <div class="text-white mb-6 sm:mb-8 md:mb-0">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-3 sm:mb-4">Have questions or feedback?</h2>
                    <p class="text-base sm:text-lg mb-3 sm:mb-4">We'd love to hear from you!</p>
                </div>
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow-lg w-full md:w-1/2">
                    <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-3 sm:mb-4">Get in Touch With Us!</h3>
                    <form class="space-y-3 sm:space-y-4">
                        <input type="email" placeholder="Enter your email here..." class="w-full p-2 sm:p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38] text-sm sm:text-base" required>
                        <textarea placeholder="Your message..." class="w-full p-2 sm:p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38] h-24 sm:h-28 text-sm sm:text-base" rows="4" required></textarea>
                        <button type="submit" class="bg-[#1A5C38] text-white px-4 sm:px-6 py-1 sm:py-2 rounded hover:bg-[#154c2f] transition-all duration-300 w-full text-sm sm:text-base">Send</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Customer Reviews Section -->
    <?php require_once __DIR__ . '/../views/reviewsection.php';?>
    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>