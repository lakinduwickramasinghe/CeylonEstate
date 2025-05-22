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
    <title>Ceylon Estate - My Listings</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <!-- Main Content -->
    <main class="flex flex-1 py-8">
        <div class="container mx-auto px-4 flex">
            <!-- Sidebar -->
            <aside class="w-64 bg-white shadow-lg rounded-lg p-4 mr-6">
                <h3 class="text-lg font-semibold mb-4 text-gray-700">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="index.php?page=user-profile" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Update Profile</a></li>
                    <li><a href="index.php?page=manage-listing" class="block bg-[#1A5C38] text-white py-2 px-4 rounded hover:bg-[#154c2f]">Manage Listings</a></li>
                </ul>
            </aside>

            <!-- Listings Section -->
            <div class="flex-1 bg-white shadow-lg rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">My Listings</h2>
                    <a href="index.php?page=add-listing" class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Create New Listing</a>
                </div>
                <div class="space-y-4">
                    <?php
                        if (empty($listings)) {
                            echo '<p class="text-gray-600">You have not created any listings yet.</p>';
                        } else {
                            foreach ($listings as $listing) {
                                $imageData = base64_encode($listing['ImageInfo']);
                                $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                                echo '
                                <div class="bg-gray-100 p-4 rounded-lg shadow-sm flex justify-between items-center gap-4">
                                    <div class="flex items-center gap-4">
                                        <img src="' . $imageSrc . '" alt="' . htmlspecialchars($listing['Title']) . '" class="w-24 h-24 object-cover rounded-lg shadow-md">
                                        <div>
                                            <h3 class="text-lg font-medium text-gray-800">' . htmlspecialchars($listing['Title']) . '</h3>
                                            <p class="text-sm text-gray-600">Type: ' . htmlspecialchars($listing['PropertyType']) . '</p>
                                            <p class="text-sm text-gray-600">Price: LKR ' . number_format($listing['Price']) . '</p>
                                            <p class="text-sm text-gray-600">Status: ' . htmlspecialchars($listing['Status']) . '</p>
                                            <p class="text-sm text-gray-600">Status: ' . htmlspecialchars($listing['ListingType']) . '</p>
                                        </div>
                                    </div>
                                    <div class="space-x-2">
                                        <a href="index.php?page=edit-listing&id=' . $listing['ListingId'] . '" class="bg-[#1A5C38] text-white px-3 py-1 rounded hover:bg-[#154c2f] transition-all duration-300">Edit</a>
                                        <form method="POST" action="index.php?page=delete-listing&id=' . $listing['ListingId'] . '" style="display:inline;">
                                            <input type="hidden" name="listing_id" value="' . $listing['ListingId'] . '">
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
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
    </footer>
</body>
</html>