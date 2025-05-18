<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - My Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-[#1A5C38] text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-2">
                <img src="logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                <span class="text-xl font-bold">CEYLON ESTATE</span>
            </div>
            <nav class="flex items-center space-x-6">
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=home" class="hover:underline">HOME</a>
                <a href="#" class="hover:underline">SELL</a>
                <a href="#" class="hover:underline">RENT</a>
                <a href="#" class="hover:underline">ABOUT US</a>
                <a href="#" class="hover:underline">POST AN ADD</a>
            </nav>
            <div class="w-6 h-6">
                <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex flex-1 py-8">
        <div class="container mx-auto px-4 flex">
            <!-- Sidebar -->
            <aside class="w-64 bg-white shadow-lg rounded-lg p-4 mr-6">
                <h3 class="text-lg font-semibold mb-4 text-gray-700">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="http://localhost/ceylonestatefinal/public/index.php?page=user-profile" class="block bg-[#1A5C38] text-white py-2 px-4 rounded hover:bg-[#154c2f]">Update Profile</a></li>
                    <li><a href="http://localhost/ceylonestatefinal/public/index.php?page=manage-listing" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Manage Listings</a></li>
                    <li><a href="#" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Boost Listing</a></li>
                    <li><a href="#" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Settings</a></li>
                    <li><a href="#" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Messages</a></li>
                </ul>
            </aside>

            <!-- Profile Content -->
            <div class="flex-1 bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">MY PROFILE</h2>
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-10 h-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700"><?php echo isset($user["FirstName"]) ? htmlspecialchars($user["FirstName"]): ''; ?> <?php echo isset($user["LastName"]) ? htmlspecialchars($user["LastName"]): ''; ?></h3>
                </div>
                <form class="space-y-4" method="POST" action="http://localhost/ceylonestatefinal/public/index.php?page=user-profile-update">
                    <div>
                        <label for="first-name" class="block text-sm font-medium text-gray-700">First Name :</label>
                        <input type="text" name="firstname"<?php echo isset($user["FirstName"]) ? ' value="'. htmlspecialchars($user["FirstName"]).'"' : ''; ?> id="first-name" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name :</label>
                        <input type="text" name="lastname" <?php echo isset($user["LastName"]) ? ' value="'. htmlspecialchars($user["LastName"]).'"' : ''; ?> id="last-name" value="" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
                        <input type="email" name="email" <?php echo isset($user["Email"]) ? ' value="'. htmlspecialchars($user["Email"]).'"' : ''; ?> id="email" value="" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" >
                    </div>

                    <div>
                        <label for="contactnumber" class="block text-sm font-medium text-gray-700">Contact Number :</label>
                        <input type="tel" name="contactnumber"<?php echo isset($user["ContactNumber"]) ? ' value="'. htmlspecialchars($user["ContactNumber"]).'"' : ''; ?> id="contactnumber" value="" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    </div>
                    
                    <div class="text-center">
                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=user-profile">
                            <button type="button" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Cancel</button>
                        </a>


                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=user-profile-update">
                        <button type="submit" class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f]">Update Profile</button>
                        </a>
                        
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-4 mt-auto">
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