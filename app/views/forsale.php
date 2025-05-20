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
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="py-16 text-center relative">
        <div class="container mx-auto px-4 relative z-10">
            <div class="bg-white text-black p-4 rounded-lg shadow-lg max-w-4xl mx-auto flex space-x-4">
                <div class="flex flex-col">
                <form action="http://localhost/ceylonestatefinal/public/index.php" method="GET">
                        <input type="hidden" name="page" value="search-sell">
                        <select id="property-type" name="property-type" class="p-2 bg-gray-200 rounded focus:outline-none">
                            <option value="" disabled selected>Select Property Type</option>
                            <option value="Apartment">APARTMENT</option>
                            <option value="Villa">VILLA</option>
                            <option value="Land">LAND</option>
                            <option value="Commercial">COMMERCIAL</option>
                            <option value="Office Space">OFFICE SPACE</option>
                            <option value="Shop">SHOP</option>
                            <option value="Other">OTHER</option>
                        </select>
                    </div>
                    <input type="number" name="min-price" placeholder="Min Price (LKR)" class="p-2 bg-gray-200 rounded focus:outline-none w-32">
                    <input type="number" name="max-price" placeholder="Max Price (LKR)" class="p-2 bg-gray-200 rounded focus:outline-none w-32">
                    <input type="text" name="keyword" placeholder="Type any keyword to get started" class="p-2 bg-gray-200 rounded flex-grow focus:outline-none">
                    <button type="submit" class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f]">Search</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Properties For Sale Section -->
    <section class="py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <?php 
                foreach($forsale as $listing) {
                    $imageData = base64_encode($listing['ImageInfo']);
                    $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                    echo <<<HTML
                    <a href="http://localhost/ceylonestatefinal/public/index.php?page=viewlisting&id={$listing['ListingId']}" class="block">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden h-80 transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                            <div class="relative w-full h-40">
                                <img src="$imageSrc" alt="Property" class="w-full h-full object-cover rounded-t-xl">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent rounded-t-xl"></div>
                                <span class="absolute top-2 left-2 bg-[#1A5C38] text-white text-xs font-semibold px-2 py-1 rounded-full">Featured</span>
                            </div>
                            <div class="p-4">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2 line-clamp-1">{$listing['Title']}</h4>
                                <p class="text-xl font-bold text-red-600 mb-2">Rs.{$listing['Price']}</p>
                                <p class="text-gray-700 text-base line-clamp-1">{$listing['AddressLine01']}</p>
                                <div class="flex flex-wrap gap-3 mt-3 text-sm text-gray-600">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9h18M3 9l2-2h14l2 2M3 9v8a2 2 0 002 2h14a2 2 0 002-2V9m-6 4h-4v4h4v-4z"></path>
                                        </svg>
                                        {$listing['Bedrooms']} Bedroom
                                    </span>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h-2v2h2V7zm0 4h-2v6h2v-6zm8-6v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2zm-6 0H9v2h6V5z"></path>
                                        </svg>
                                        {$listing['Bathrooms']} Bathroom
                                    </span>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 6l2 2h12l2-2M4 6v12a2 2 0 002 2h12a2 2 0 002-2V6m-8 6h-4m4 0h4"></path>
                                        </svg>
                                        {$listing['AreaSize']}m²
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    HTML;
                }
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

    
    

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>