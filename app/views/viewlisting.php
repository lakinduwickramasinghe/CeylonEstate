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
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

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
                <!-- Go Back Button -->
                <div class="mb-6">
                    <button onclick="history.back()" class="flex items-center bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Go Back
                    </button>
                </div>

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
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>