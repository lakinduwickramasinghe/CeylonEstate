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
     <?php
        if(isset($_SESSION['user_id']) || isset($_SESSION['user_role'])) {
            $email = $_SESSION['user_email'];
            echo <<<HTML
            <header class="bg-[#1A5C38] text-white py-4">
                <div class="container mx-auto flex justify-between items-center px-4">
                    <div class="flex items-center space-x-2">
                        <img src="logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                        <span class="text-xl font-bold">CEYLON ESTATE</span>
                    </div>
                    <nav class="flex items-center space-x-6">
                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=home" class="hover:underline">HOME</a>
                        <a href="" class="hover:underline">SELL</a>
                        <a href="#" class="hover:underline">RENT</a>
                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=aboutus" class="hover:underline">ABOUT US</a>
                    </nav>
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col items-center">
                            <a href="http://localhost/ceylonestatefinal/public/index.php?page=user-profile" class="flex flex-col items-center">
                                <div class="w-6 h-6">
                                    <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <span class="text-sm mt-1">{$email}</span>
                            </a>
                        </div>
                        <form action="http://localhost/ceylonestatefinal/public/index.php?page=logout-controller" method="POST">
                            <button class="bg-white text-[#1A5C38] px-3 py-1 rounded hover:bg-gray-200 text-sm">Logout</button>
                        </form>
                    </div>
                </div>
            </header>
            HTML;
        } else {
            echo <<<HTML
<header class="bg-[#1A5C38] text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <div class="flex items-center space-x-2">
            <img src="logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
            <span class="text-xl font-bold">CEYLON ESTATE</span>
        </div>
        <nav class="flex items-center space-x-6">
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=home" class="hover:underline">HOME</a>
            <a href="" class="hover:underline">SELL</a>
            <a href="#" class="hover:underline">RENT</a>
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=aboutus" class="hover:underline">ABOUT US</a>
        </nav>
        <div class="flex items-center space-x-4">
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=login">
                <button class="bg-white text-[#1A5C38] px-4 py-2 rounded hover:bg-gray-200">Log In</button>
            </a>
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=signup">
                <button class="bg-[#2E7D32] text-white px-4 py-2 rounded hover:bg-[#225C26]">Sign Up</button>
            </a>
        </div>
    </div>
</header>
HTML;
    }
    ?>

    <!-- Hero Section -->
    <section class="py-16 text-center relative">
        <div class="absolute inset-0 z-0" style="background-image: url('/public/images/bg01.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <!-- Insert your background image URL here, e.g., style="background-image: url('your-image.jpg');" -->
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-4xl font-bold mb-4 text-white">FIND YOUR DREAM HOME</h1>
            <p class="text-lg mb-8 text-white">Now you can save yourself the stress, time, and hidden costs, with hundreds of homes for you to choose from.</p>
            <div class="bg-white text-black p-4 rounded-lg shadow-lg max-w-4xl mx-auto flex space-x-4">
                <div class="flex space-x-2">
                    <button class="bg-gray-200 px-4 py-2 rounded">Sell</button>
                    <button class="bg-white px-4 py-2 rounded">Rent</button>
                </div>
                <select class="p-2 bg-gray-200 rounded focus:outline-none">
                    <option>HOUSE TYPE</option>
                </select>
                <select class="p-2 bg-gray-200 rounded focus:outline-none">
                    <option>PRICE RANGE</option>
                </select>
                <input type="text" placeholder="Type any keyword to get started" class="p-2 bg-gray-200 rounded flex-grow focus:outline-none">
                <button class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f]">Search</button>
            </div>
        </div>
    </section>

    <!-- Properties For Sale Section -->
    <section class="py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl font-bold mb-8 text-center text-[#1A5C38]">Properties For Sale</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Property Card 1 -->
                 

                <?php 
                foreach($forsale as $listing) {
                    $imageData = base64_encode($listing['ImageInfo']);
                    $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                    echo <<<HTML
                    <a href="http://localhost/ceylonestatefinal/public/index.php?page=viewlisting&id={$listing['ListingId']}">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden h-72">
                            <img src="$imageSrc" alt="Property 1" class="w-full h-32 object-cover">
                            <div class="p-2">
                                <p class="text-lg font-bold text-red-600">Rs.{$listing['Price']}</p>
                                <p class="text-gray-600 text-sm">{$listing['AddressLine01']}</p>
                                <div class="flex space-x-2 mt-1 text-xs text-gray-500">
                                    <span>{$listing['Bedrooms']} Bedroom</span>
                                    <span>{$listing['Bathrooms']} Bathroom</span>
                                    <span>{$listing['AreaSize']}m House Size</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    HTML;}

                ?>

                <!-- <div class="bg-white rounded-lg shadow-lg overflow-hidden h-72">
                    <img src="/public/images/image01.jpg" alt="Property 1" class="w-full h-32 object-cover">
                    <div class="p-2">
                        <p class="text-lg font-bold text-red-600">Rs.200,000,000</p>
                        <p class="text-gray-600 text-sm">No 91 Old Town Street Kandy</p>
                        <div class="flex space-x-2 mt-1 text-xs text-gray-500">
                            <span>3 Bedroom</span>
                            <span>3 Bathroom</span>
                            <span>360m House Size</span>
                        </div>
                    </div>
                </div> -->



            </div>
        </div>
    </section>

    <!-- Properties For Rent Section -->
    <section class="py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl font-bold mb-8 text-center text-[#1A5C38]">Properties For Rent</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">


            <?php 
                foreach($fortent as $listing) {
                    $imageData = base64_encode($listing['ImageInfo']);
                    $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                    echo <<<HTML
                    <a href="http://localhost/ceylonestatefinal/public/index.php?page=viewlisting&id={$listing['ListingId']}">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden h-72">
                            <img src="$imageSrc" alt="Property 1" class="w-full h-32 object-cover">
                            <div class="p-2">
                                <p class="text-lg font-bold text-red-600">Rs.{$listing['Price']} /Month</p>
                                <p class="text-gray-600 text-sm">{$listing['AddressLine01']}</p>
                                <div class="flex space-x-2 mt-1 text-xs text-gray-500">
                                    <span>{$listing['Bedrooms']} Bedroom</span>
                                    <span>{$listing['Bathrooms']} Bathroom</span>
                                    <span>{$listing['AreaSize']}m House Size</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    HTML;}

            ?>
                <!-- Property Card 4 -->
                <!-- <div class="bg-white rounded-lg shadow-lg overflow-hidden h-72">
                    <img src="https://via.placeholder.com/300x128" alt="Property 4" class="w-full h-32 object-cover">
                    <div class="p-2">
                        <p class="text-lg font-bold text-red-600">Rs.200,000,000</p>
                        <p class="text-gray-600 text-sm">No 91 Old Town Street Kandy</p>
                        <div class="flex space-x-2 mt-1 text-xs text-gray-500">
                            <span>3 Bedroom</span>
                            <span>3 Bathroom</span>
                            <span>360m House Size</span>
                        </div>
                    </div>
                </div> -->
                


            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-gray-200 py-16">
        <div class="container mx-auto px-4 flex flex-col lg:flex-row justify-between items-start">
            <div class="mb-8 lg:mb-0">
                <h3 class="text-2xl font-bold mb-4">Need to talk..?</h3>
                <p class="text-lg mb-4">We are ready to help</p>
                <p class="text-sm">Contact:</p>
                <p class="text-sm">No 645 9 kings street Matale Sri Lanka</p>
                <p class="text-sm">645 923 215</p>
                <p class="text-sm">help@ceylonestate.lk</p>
                <p class="text-sm mt-4">Social Media:</p>
                <p class="text-sm">ceylonestate.matale</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg w-full lg:w-96">
                <h3 class="text-xl font-bold mb-4">Any Questions?</h3>
                <form>
                    <div class="mb-4">
                        <input type="email" placeholder="Enter your email here..." class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    </div>
                    <div class="mb-4">
                        <textarea placeholder="Your question..." class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38] h-24"></textarea>
                    </div>
                    <button type="button" class="w-full bg-[#1A5C38] text-white py-2 rounded hover:bg-[#154c2f]">Send</button>
                </form>
            </div>
        </div>
    </section>

    

    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-2">
                <img src="logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                <span class="text-xl font-bold">CEYLON ESTATE</span>
            </div>
            <nav class="flex space-x-6">
                <a href="#" class="hover:underline">Sell</a>
                <a href="#" class="hover:underline">Rent</a>
                <a href="#" class="hover:underline">About Us</a>
                <a href="#" class="hover:underline">Post An Add</a>
                <a href="#" class="hover:underline">My Profile</a>
            </nav>
            <p class="text-sm">Copyright © Ceylon Estate. All Right Reserved.</p>
        </div>
    </footer>
</body>
</html>