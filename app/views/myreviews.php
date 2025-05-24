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
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>


    <main class="flex flex-1 py-8">
        <div class="container mx-auto px-4 flex">


            <aside class="w-64 bg-white shadow-lg rounded-lg p-4 mr-6">
                <h3 class="text-lg font-semibold mb-4 text-gray-700">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="/ceylonestatefinal/public/updateprofile" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Update Profile</a></li>
                    <li><a href="/ceylonestatefinal/public/updateprofile/myreviews" class="block bg-[#1A5C38] text-white py-2 px-4 rounded hover:bg-[#154c2f]">My Reviews</a></li>
                    <?php
                        $userRole = $_SESSION['user_role'] ?? null;
                        if ($userRole === "Seller") {
                            echo '<li><a href="/ceylonestatefinal/public/updateprofile/managelisting" class="block bg-gray-100 py-2 px-4 rounded hover:bg-gray-200">Manage Listings</a></li>';
                        }

                        
                    ?>
                    
                </ul>
            </aside>

            
            <div class="flex-1 bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-6 text-left text-[#1A5C38]">My Reviews</h2>
                
                <?php

                if (empty($reviews)) {
                    echo '<p class="text-gray-600 text-center">You have not posted any reviews yet. Share your experience with Ceylon Estate!</p>';
                } else {
                    foreach ($reviews as $review) {
                        $stars = str_repeat('★', $review['StarRating']) . str_repeat('☆', 5 - $review['StarRating']);
                        echo <<<HTML
                        <div class="border-b border-gray-200 pb-4 mb-4 last:border-b-0">
                            <div class="flex justify-between items-center mb-2">
                                <div>
                                    <p class="text-sm text-gray-600">Posted on {$review['CreatedDate']}</p>
                                    <p class="text-yellow-500">{$stars} ({$review['StarRating']}/5)</p>
                                </div>
                                <div class="space-x-2">
                                    <a href="/ceylonestatefinal/public/review/delete/{$review['ReviewId']}" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition-all duration-300">Delete</a>
                                </div>
                            </div>
                            <p class="text-gray-700">{$review['Description']}</p>
                        </div>
                        HTML;
                    }
                }
                ?>
                
                <!-- Add Review Button -->
                <div class="text-center mt-6">
                    <a href="/ceylonestatefinal/public/review" class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add a Review</a>
                </div>
            </div>


        </div>
    </main>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>