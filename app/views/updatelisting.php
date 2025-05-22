    <!-- Role Validation code -->

    <?php
    require __DIR__ .  '/../../app/controllers/logincontroller.php';
    $controller = new LoginController();
    $controller->roleValidate();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - Update Listing</title>
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

    <?php
    $listingid = $_GET['id'];
    $_SESSION['listingid'] = $listingid;
    ?>

    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center py-12">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-3xl">
            <h1 class="text-2xl font-bold text-gray-800 mb-3 text-center">Update Listing</h1>

            <form action="index.php?page=update-listing" method="POST" enctype="multipart/form-data" class="space-y-3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Column 1 -->
                    <div class="space-y-3">
                        <input type="hidden" name="authLevel" value="Admin">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                            <input type="text" id="title" name="title" <?php echo'value="' . htmlspecialchars($listing['Title']) . '"' ?> class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                        </div>
                        <div>
                            <label for="propertyType" class="block text-sm font-medium text-gray-700">Property Type:</label>
                            <select id="propertyType" name="PropertyType" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                                <?php
                                $types = ["house", "apartment", "villa", "land", "commercial", "warehouse", "office", "shop", "other"];
                                foreach ($types as $type) {
                                    $selected = ($listing['PropertyType'] == $type) ? 'selected' : '';
                                    echo "<option value=\"$type\" $selected>" . ucfirst($type) . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label for="areaSize" class="block text-sm font-medium text-gray-700">Area Size (sq ft):</label>
                            <input type="number" id="areaSize" name="AreaSize" <?php echo'value="' . htmlspecialchars($listing['AreaSize']) . '"' ?> class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                        </div>
                        <div>
                            <label for="bedrooms" class="block text-sm font-medium text-gray-700">Bedrooms:</label>
                            <input type="number" id="bedrooms" name="Bedrooms" <?php echo'value="' . htmlspecialchars($listing['Bedrooms']) . '"' ?> class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                        </div>
                        <div>
                            <label for="bathrooms" class="block text-sm font-medium text-gray-700">Bathrooms:</label>
                            <input type="number" id="bathrooms" name="Bathrooms" <?php echo'value="' . htmlspecialchars($listing['Bathrooms']) . '"' ?> class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                        </div>
                        <div>
                            <label for="zipCode" class="block text-sm font-medium text-gray-700">Zip Code:</label>
                            <input type="text" id="zipCode" name="ZipCode" <?php echo'value="' . htmlspecialchars($listing['ZipCode']) . '"' ?> class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="space-y-3">
                        <div>
                            <label for="ListingType" class="block text-sm font-medium text-gray-700">Listing Type:</label>
                            <select id="ListingType" name="ListingType" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                                <option value="selling" <?= $listing['ListingType'] == 'selling' ? 'selected' : '' ?>>Selling</option>
                                <option value="renting" <?= $listing['ListingType'] == 'renting' ? 'selected' : '' ?>>Renting</option>
                            </select>
                        </div>
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700">Price (LKR):</label>
                            <input type="number" id="price" name="Price" <?php echo'value="' . htmlspecialchars($listing['Price']) . '"' ?> class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                        </div>
                        <div>
                            <label for="addressLine01" class="block text-sm font-medium text-gray-700">Address Line 01:</label>
                            <input type="text" id="AddressLine01" name="AddressLine01" <?php echo'value="' . htmlspecialchars($listing['AddressLine01']) . '"' ?> class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                        </div>
                        <div>
                            <label for="addressLine02" class="block text-sm font-medium text-gray-700">Address Line 02:</label>
                            <input type="text" id="AddressLine02" name="AddressLine02" <?php echo'value="' . htmlspecialchars($listing['AddressLine02']) . '"' ?> class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                        </div>
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700">City:</label>
                            <input type="text" id="city" name="City" <?php echo'value="' . htmlspecialchars($listing['City']) . '"' ?> class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" required>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="space-y-3">
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                        <textarea id="description" name="Description" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" rows="3" required><?= htmlspecialchars($listing['Description']) ?></textarea>
                    </div>
                </div>

                <!-- Buttons Aligned -->
                <div class="flex justify-center space-x-4 mt-4">
                    <div class="text-center">
                        <button onclick="history.back()" class="flex items-center bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            Go Back
                        </button>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Update Listing</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>