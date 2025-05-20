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
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

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
                                    <option value="Selling">Selling</option>
                                    <option value="Renting">Renting</option>
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
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>