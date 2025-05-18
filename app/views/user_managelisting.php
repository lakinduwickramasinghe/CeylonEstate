<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - My Listings</title>
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
                        <img src="/CeylonEstateFinal/public/images/logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                        <span class="text-xl font-bold">CEYLON ESTATE</span>
                    </div>
                    <nav class="flex items-center space-x-6">
                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=home" class="hover:underline">HOME</a>
                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=forsale" class="hover:underline">SELL</a>
                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=forrent" class="hover:underline">RENT</a>
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
            <img src="/CeylonEstateFinal/public/images/logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
            <span class="text-xl font-bold">CEYLON ESTATE</span>
        </div>
        <nav class="flex items-center space-x-6">
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=home" class="hover:underline">HOME</a>
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=forsale" class="hover:underline">SELL</a>
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=forrent" class="hover:underline">RENT</a>
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
    <main class="flex flex-1 py-8">
        <div class="container mx-auto px-4 flex">
            <!-- Sidebar -->
            <aside class="w-64 bg-white shadow-lg rounded-lg p-4 mr-6">
                <h3 class="text-lg font-semibold mb-4 text-gray-700">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="http://localhost/ceylonestatefinal/public/index.php?page=user-profile" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Update Profile</a></li>
                    <li><a href="http://localhost/ceylonestatefinal/public/index.php?page=manage-listing" class="block bg-[#1A5C38] text-white py-2 px-4 rounded hover:bg-[#154c2f]">Manage Listings</a></li>
                    <li><a href="#" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Boost Listing</a></li>
                    <li><a href="#" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Settings</a></li>
                    <li><a href="#" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Messages</a></li>
                </ul>
            </aside>

            <!-- Listings Section -->
            <div class="flex-1 bg-white shadow-lg rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">My Listings</h2>
                    <a href="http://localhost/ceylonestatefinal/public/index.php?page=adds-listing" class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Create New Listing</a>
                </div>
                <div class="space-y-4">
                    <?php
                    // Simulated user listings data (replace with actual database query)
                    $listings = [
                        ['id' => 1, 'title' => 'Apartment in Colombo', 'property_type' => 'Apartment', 'price' => 15000000, 'status' => 'Available'],
                        ['id' => 2, 'title' => 'House in Kandy', 'property_type' => 'House', 'price' => 25000000, 'status' => 'Sold'],
                        ['id' => 3, 'title' => 'Annex in Galle', 'property_type' => 'Annex', 'price' => 8000, 'status' => 'Rented']
                    ];

                    if (empty($listings)) {
                        echo '<p class="text-gray-600">You have not created any listings yet.</p>';
                    } else {
                        foreach ($listings as $listing) {
                            echo '
                            <div class="bg-gray-100 p-4 rounded-lg shadow-sm flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-800">' . htmlspecialchars($listing['title']) . '</h3>
                                    <p class="text-sm text-gray-600">Type: ' . htmlspecialchars($listing['property_type']) . '</p>
                                    <p class="text-sm text-gray-600">Price: LKR ' . number_format($listing['price']) . '</p>
                                    <p class="text-sm text-gray-600">Status: ' . htmlspecialchars($listing['status']) . '</p>
                                </div>
                                <div class="space-x-2">
                                    <a href="edit-listing.php?id=' . $listing['id'] . '" class="bg-[#1A5C38] text-white px-3 py-1 rounded hover:bg-[#154c2f] transition-all duration-300">Edit</a>
                                    <form method="POST" action="delete-listing.php" style="display:inline;" onsubmit="return confirm(\'Are you sure you want to delete this listing?\');">
                                        <input type="hidden" name="listing_id" value="' . $listing['id'] . '">
                                        <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition-all duration-300">Delete</button>
                                    </form>
                                </div>
                            </div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-2">
                <img src="/CeylonEstateFinal/public/images/logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                <span class="text-xl font-bold">CEYLON ESTATE</span>
            </div>
            <nav class="flex space-x-6">
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=forsale" class="hover:underline">Sell</a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=forrent" class="hover:underline">Rent</a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=aboutus" class="hover:underline">About Us</a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=adds-listing" class="hover:underline">Post An Add</a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=user-profile" class="hover:underline">My Profile</a>
            </nav>
            <p class="text-sm">Copyright © Ceylon Estate. All Right Reserved.</p>
        </div>
    </footer>
</body>
</html>