


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - View Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-green-50">
    <!-- Header -->
    <?php
    if (isset($_SESSION['user_id']) || isset($_SESSION['user_role'])) {
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

    <!-- Main Content -->
    <main class="flex-1 py-12">
        <div class="container mx-auto px-4 max-w-4xl">
            <!-- Hero Image -->
            <div class="relative rounded-lg overflow-hidden mb-8">
                <?php
                $imageData = base64_encode($listing['ImageInfo']);
                $imageType = 'jpeg';

                echo '<img src="data:image/' . $imageType . ';base64,' . $imageData . '" alt="Property Image" class="w-full h-80 object-cover">';
                ?>
                <div class="absolute top-4 left-4 bg-[#1A5C38] text-white px-3 py-1 rounded-full text-sm font-semibold">
                    <?php echo htmlspecialchars(ucfirst($listing['ListingType'])); ?>
                </div>
            </div>

            <!-- Property Details Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h1 class="text-3xl font-bold text-gray-800 mb-6"><?php echo htmlspecialchars($listing['Title']); ?></h1>
                <div class="border-t border-gray-200 mb-6"></div>
                <div class="mb-6">
                    <p class="text-2xl font-bold text-red-600 mb-2">Rs.<?php echo number_format($listing['Price'], 0); ?><?php echo $listing['ListingType'] === 'Renting' ? '/month' : ''; ?></p>
                    <div class="flex space-x-6 text-gray-700 mb-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-[#1A5C38]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 2v7h4v-7m-4 0h4m-9 7h14"></path>
                            </svg>
                            <span><?php echo htmlspecialchars($listing['Bedrooms']); ?> Bedrooms</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-[#1A5C38]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span><?php echo htmlspecialchars($listing['Bathrooms']); ?> Bathrooms</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-[#1A5C38]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a2 2 0 012-2h2a2 2 0 012 2v5m-4 0h4"></path>
                            </svg>
                            <span><?php echo htmlspecialchars($listing['AreaSize']); ?> sq ft</span>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4"><span class="font-semibold">Property Type:</span> <?php echo htmlspecialchars(ucfirst($listing['PropertyType'])); ?></p>
                    <p class="text-gray-700 mb-4"><span class="font-semibold">Address:</span> <?php echo htmlspecialchars($listing['AddressLine01']); ?><?php echo $listing['AddressLine02'] ? ', ' . htmlspecialchars($listing['AddressLine02']) : ''; ?>, <?php echo htmlspecialchars($listing['City']); ?>, <?php echo htmlspecialchars($listing['ZipCode']); ?></p>
                </div>
                <div class="border-t border-gray-200 mb-6"></div>
                <div>
                    <h2 class="text-xl font-bold text-[#1A5C38] mb-4">Description</h2>
                    <p class="text-gray-700"><?php echo htmlspecialchars($listing['Description']); ?></p>
                </div>
                <div class="mt-6 text-center">
                    <a href="mailto:help@ceylonestate.lk?subject=Inquiry%20About%20Listing:%20<?php echo urlencode($listing['Title']); ?>" class="inline-block bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Contact Seller</a>
                </div>
            </div>
        </div>
    </main>

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
            <p class="text-sm">Last updated: 01:02 AM +0530, Sunday, May 18, 2025</p>
        </div>
    </footer>
</body>
</html>