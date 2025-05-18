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
                <div class="flex space-x-2">
                    <button class="bg-gray-200 px-4 py-2 rounded">Sell</button>
                    <button class="bg-white px-4 py-2 rounded">Rent</button>
                </div>
                <select class="p-2 bg-gray-200 rounded focus:outline-none">
                    <option>HOUSE TYPE</option>
                </select>
                <select class="p-2 bg-gray-200 rounded focus:outline-none">
                    <option>PRICE RANGE</option>
                </select>
                <input type="text" placeholder="Type any keyword to get started" class="p-2 bg-gray-200 rounded flex-grow focus:outline-none">
                <button class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f]">Search</button>
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
                    <a href="http://localhost/ceylonestatefinal/public/index.php?page=viewlisting&id={$listing['ListingId']}">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden h-72">
                            <img src="$imageSrc" alt="Property 1" class="w-full h-32 object-cover">
                            <div class="p-2">
                                <p class="text-lg font-bold text-red-600">Rs.{$listing['Price']}</p>
                                <p class="text-gray-600 text-sm">{$listing['AddressLine01']}</p>
                                <div class="flex space-x-2 mt-1 text-xs text-gray-500">
                                    <span>{$listing['Bedrooms']} Bedroom</span>
                                    <span>{$listing['Bathrooms']} Bathroom</span>
                                    <span>{$listing['AreaSize']}m House Size</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    HTML;}

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