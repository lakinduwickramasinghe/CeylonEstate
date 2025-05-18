<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - Create New Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-image-placeholder {
            background-color: #e5e7eb;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-green-50">
    <!-- Header -->
    <header class="bg-[#1A5C38] text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-2">
                <img src="logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                <span class="text-xl font-bold">Ceylon Estate</span>
            </div>
            <nav class="flex items-center space-x-6">
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=home" class="hover:underline">HOME</a>
                <a href="#" class="hover:underline">SELL</a>
                <a href="#" class="hover:underline">RENT</a>
                <a href="#" class="hover:underline">ABOUT US</a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=create-listing" class="hover:underline">POST AN ADD</a>
            </nav>
            <div class="flex items-center space-x-2">
                <div class="w-6 h-6">
                    <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center py-12">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-3xl">
            <h1 class="text-2xl font-bold text-gray-800 mb-3 text-center">Create New Listing</h1>
            <div class="space-y-3">
                <!-- Form Section -->
                <form action="http://localhost/ceylonestatefinal/public/index.php?page=create-listing" method="POST" enctype="multipart/form-data" class="space-y-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Column 1 -->
                        <div class="space-y-3">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                                <input type="text" id="title" name="title" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                            </div>
                            <div>
                                <label for="propertyType" class="block text-sm font-medium text-gray-700">Property Type:</label>
                                <select type="text" id="propertyType" name="propertyType" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                                    <option value="house">House</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="villa">Villa</option>
                                    <option value="land">Land</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="warehouse">Warehouse</option>
                                    <option value="office">Office Space</option>
                                    <option value="shop">Shop</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="areaSize" class="block text-sm font-medium text-gray-700">Area Size (sq ft):</label>
                                <input type="number" id="areaSize" name="areaSize" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                            </div>
                            <div>
                                <label for="bedrooms" class="block text-sm font-medium text-gray-700">Bedrooms:</label>
                                <input type="number" id="bedrooms" name="bedrooms" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                            </div>
                            <div>
                                <label for="bathrooms" class="block text-sm font-medium text-gray-700">Bathrooms:</label>
                                <input type="number" id="bathrooms" name="bathrooms" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                            </div>
                            <div>
                                <label for="zipCode" class="block text-sm font-medium text-gray-700">Zip Code:</label>
                                <input type="text" id="zipCode" name="zipCode" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="space-y-3">
                            <div>
                                <label for="listingType" class="block text-sm font-medium text-gray-700">Listing Type:</label>
                                <select id="listingType" name="listingType" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                                    <option value="selling">Selling</option>
                                    <option value="renting">Renting</option>
                                </select>
                            </div>
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">Price (LKR):</label>
                                <input type="number" id="price" name="price" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                            </div>
                            <div>
                                <label for="addressLine01" class="block text-sm font-medium text-gray-700">Address Line 01:</label>
                                <input type="text" id="addressLine01" name="addressLine01" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                            </div>
                            <div>
                                <label for="addressLine02" class="block text-sm font-medium text-gray-700">Address Line 02:</label>
                                <input type="text" id="addressLine02" name="addressLine02" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                            </div>
                            <div>
                                <label for="city" class="block text-sm font-medium text-gray-700">City:</label>
                                <input type="text" id="city" name="city" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                            </div>
                        </div>
                    </div>
                    <!-- Description (Full Width) -->
                    <div class="space-y-3">
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                            <textarea id="description" name="description" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" rows="3" required></textarea>
                        </div>
                    </div>
                    <!-- Image Upload Section -->
                    <div class="mt-3">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Upload Images:</label>
                        <input type="file" name="image" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center mt-3">
                        <button type="submit" class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Create Listing</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4">
            <div class="flex items-center space-x-2 mb-4 md:mb-0">
                <img src="logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                <span class="text-xl font-bold">Ceylon Estate</span>
            </div>
            <nav class="flex space-x-6 mb-4 md:mb-0">
                <a href="#" class="hover:underline">Sell</a>
                <a href="#" class="hover:underline">Rent</a>
                <a href="#" class="hover:underline">About Us</a>
                <a href="#" class="hover:underline">Post An Add</a>
                <a href="#" class="hover:underline">My Profile</a>
            </nav>
            <p class="text-sm">Last updated: 09:23 AM +0530, Saturday, May 17, 2025</p>
        </div>
    </footer>
</body>
</html>