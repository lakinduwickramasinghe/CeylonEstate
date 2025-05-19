<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <!-- Hero Section -->
<section class="py-16 text-center relative">
    <div class="absolute inset-0 z-0" style="background-image: url('/CeylonEstateFinal/public/images/bg01.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-black opacity-40"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-4xl font-bold mb-4 text-white">FIND YOUR DREAM HOME</h1>
        <p class="text-lg mb-8 text-white">Now you can save yourself the stress, time, and hidden costs, with hundreds of homes for you to choose from.</p>

        <div class="bg-white text-black p-4 rounded-lg shadow-lg max-w-4xl mx-auto flex flex-wrap gap-2 justify-center">
            <!-- Sell / Rent Toggle Buttons -->
            <div class="flex space-x-2">
                <button id="sellBtn" onclick="selectOption('sell')" class="toggle-btn bg-gray-200 px-4 py-2 rounded">Sell</button>
                <button id="rentBtn" onclick="selectOption('rent')" class="toggle-btn bg-gray-200 px-4 py-2 rounded">Rent</button>
            </div>

            <!-- House Type Dropdown -->
            <select class="p-2 bg-gray-200 rounded focus:outline-none">
                     <option value="" disabled selected>Select Property Type</option>
                        <option value="Apartment">APARTMENT</option>
                        <option value="Villa">VILLA</option>
                        <option value="Land">LAND</option>
                        <option value="Commercial">COMMERCIAL</option>
                        <option value="Office Space">OFFICE SPACE</option>
                        <option value="Shop">SHOP</option>
                        <option value="Other">OTHER</option>
            </select>

            <!-- Price Range Dropdown (you can replace this with a slider later) -->
            <!-- <select class="p-2 bg-gray-200 rounded focus:outline-none">
                <option>PRICE RANGE</option>
            </select> -->

            <!-- Keyword Input -->
            <input type="text" placeholder="Type any keyword to get started" class="p-2 bg-gray-200 rounded flex-grow min-w-[200px] focus:outline-none">

            <!-- Search Button -->
            <button class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f]">Search</button>
        </div>
    </div>
</section> 

<!-- Js for the front end (toggle between sell and rent button) -->
<script>
    function selectOption(option) {
        const sellBtn = document.getElementById('sellBtn');
        const rentBtn = document.getElementById('rentBtn');

        if (option === 'sell') {
            sellBtn.classList.add('bg-[#1A5C38]', 'text-white');
            sellBtn.classList.remove('bg-gray-200', 'text-black');

            rentBtn.classList.add('bg-gray-200', 'text-black');
            rentBtn.classList.remove('bg-[#1A5C38]', 'text-white');
        } else if (option === 'rent') {
            rentBtn.classList.add('bg-[#1A5C38]', 'text-white');
            rentBtn.classList.remove('bg-gray-200', 'text-black');

            sellBtn.classList.add('bg-gray-200', 'text-black');
            sellBtn.classList.remove('bg-[#1A5C38]', 'text-white');
        }
    }
</script>



    <!-- Properties For Sale Section -->
    <section class="py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl font-bold mb-8 text-center text-[#1A5C38]">Properties For Sale</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">


            <!-- Property Cards (for sale)  -->

                <?php 
                foreach($forsale as $listing) {
                    $imageData = base64_encode($listing['ImageInfo']);
                    $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                    echo <<<HTML
                    <a href="http://localhost/ceylonestatefinal/public/index.php?page=viewlisting&id={$listing['ListingId']}" class="block">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden h-80 transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                            <div class="relative w-full h-40">
                                <img src="$imageSrc" alt="Property" class="w-full h-full object-cover rounded-t-xl">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-t-xl"></div>
                                <span class="absolute top-2 left-2 bg-[#1A5C38] text-white text-xs font-semibold px-2 py-1 rounded-full">Featured</span>
                            </div>
                            <div class="p-4">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2 line-clamp-1">{$listing['Title']}</h4>
                                <p class="text-xl font-bold text-red-600 mb-2">Rs.{$listing['Price']}</p>
                                <p class="text-gray-700 text-base line-clamp-1">{$listing['AddressLine01']}</p>
                                <div class="flex flex-wrap gap-3 mt-3 text-sm text-gray-600">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9h18M3 9l2-2h14l2 2M3 9v8a2 2 0 002 2h14a2 2 0 002-2V9m-6 4h-4v4h4v-4z"></path>
                                        </svg>
                                        {$listing['Bedrooms']} Bedroom
                                    </span>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h-2v2h2V7zm0 4h-2v6h2v-6zm8-6v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2zm-6 0H9v2h6V5z"></path>
                                        </svg>
                                        {$listing['Bathrooms']} Bathroom
                                    </span>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 6l2 2h12l2-2M4 6v12a2 2 0 002 2h12a2 2 0 002-2V6m-8 6h-4m4 0h4"></path>
                                        </svg>
                                        {$listing['AreaSize']}m²
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    HTML;
                }
                ?>

            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl font-bold mb-8 text-center text-[#1A5C38]">Properties For Rent</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Property Cards (for rent)  -->
            <?php 
            foreach($fortent as $listing) {
                $imageData = base64_encode($listing['ImageInfo']);
                $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                echo <<<HTML
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=viewlisting&id={$listing['ListingId']}" class="block">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden h-80 transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                        <div class="relative w-full h-40">
                            <img src="$imageSrc" alt="Property" class="w-full h-full object-cover rounded-t-xl">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-t-xl"></div>
                            <span class="absolute top-2 left-2 bg-[#1A5C38] text-white text-xs font-semibold px-2 py-1 rounded-full">Featured</span>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-semibold text-gray-800 mb-2 line-clamp-1">{$listing['Title']}</h4>
                            <p class="text-xl font-bold text-red-600 mb-2">Rs.{$listing['Price']} /Month</p>
                            <p class="text-gray-700 text-base line-clamp-1">{$listing['AddressLine01']}</p>
                            <div class="flex flex-wrap gap-3 mt-3 text-sm text-gray-600">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9h18M3 9l2-2h14l2 2M3 9v8a2 2 0 002 2h14a2 2 0 002-2V9m-6 4h-4v4h4v-4z"></path>
                                    </svg>
                                    {$listing['Bedrooms']} Bedroom
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h-2v2h2V7zm0 4h-2v6h2v-6zm8-6v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2zm-6 0H9v2h6V5z"></path>
                                    </svg>
                                    {$listing['Bathrooms']} Bathroom
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 6l2 2h12l2-2M4 6v12a2 2 0 002 2h12a2 2 0 002-2V6m-8 6h-4m4 0h4"></path>
                                    </svg>
                                    {$listing['AreaSize']}m²
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
                HTML;
            }
            ?>              
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 z-0" style="background-image: url('/ceylonestatefinal/public/images/bg01.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-80"></div> <!-- Gradient overlay for better contrast -->
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Contact Information -->
            <div class="text-white text-center lg:text-left animate-fade-in" style="animation-delay: 0.2s;">
                <h3 class="text-4xl font-extrabold mb-8 drop-shadow-lg">Need to Talk?</h3>
                <p class="text-2xl mb-6 drop-shadow">We’re Here to Help You</p>
                <div class="space-y-4">
                    <p class="text-lg">Contact Us:</p>
                    <p class="text-lg">No 645, 9 Kings Street, Matale, Sri Lanka</p>
                    <p class="text-lg">Phone: <a href="tel:+94645923215" class="underline hover:text-gray-300">645 923 215</a></p>
                    <p class="text-lg">Email: <a href="mailto:help@ceylonestate.lk" class="underline hover:text-gray-300">help@ceylonestate.lk</a></p>
                    <p class="text-lg mt-6">Social Media:</p>
                    <p class="text-lg">ceylonestate.matale</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white/80 backdrop-blur-md p-8 rounded-xl shadow-xl w-full max-w-md mx-auto lg:mx-0 animate-fade-in" style="animation-delay: 0.4s;">
                <h3 class="text-2xl font-bold text-[#1A5C38] mb-6">Got a Question?</h3>
                <form action="/submit-contact" method="POST" class="space-y-6">
                    <div class="relative mb-6">
                        <input type="email" name="email" placeholder="Your email..." required class="w-full p-4 pl-10 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38] placeholder-gray-500 transition-all duration-300">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m9-9h-1m-1-1v-1a1 1 0 00-1-1H9a1 1 0 00-1 1v1m1 1v1a1 1 0 001 1h1m-1-1v-1"></path>
                        </svg>
                    </div>
                    <div class="relative mb-6">
                        <textarea name="question" placeholder="Your question..." required class="w-full p-4 pt-10 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38] h-40 placeholder-gray-500 transition-all duration-300"></textarea>
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M9 16h.01M13 16h.01M7 20h10a2 2 0 002-2V6a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <button type="submit" class="w-full bg-[#1A5C38] text-white py-3 rounded-lg hover:bg-[#154c2f] transition-all duration-300 font-semibold shadow-md">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

   

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>