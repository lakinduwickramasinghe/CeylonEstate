<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate For Sale</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="py-16 text-center relative">
        <div class="container mx-auto px-4 relative z-10">
            <div class="bg-white text-black p-4 rounded-lg shadow-lg max-w-4xl mx-auto">
                <form action="/ceylonestatefinal/public/search/forsale" method="GET" class="flex space-x-4">
                    <input type="hidden" name="page" value="search-sell">
                    <div class="flex flex-col">
                        <select id="property-type" name="property-type" class="p-2 bg-gray-200 rounded focus:outline-none">
                            <option value="" disabled selected>Select Property Type</option>
                            <option value="House">HOUSE</option>
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


    <div class="container mx-auto px-4 max-w-6xl mb-4 text-right">
        <a href="/ceylonestatefinal/public/forsale">
            <button type="reset" form="search-sell-form" class="text-sm text-gray-500 underline hover:text-gray-700">Reset Search</button>
        </a>
    </div>


    <!-- Search Results Section -->
    <section class="py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="mb-6">
                <p class="text-lg font-semibold text-gray-800">
                    <?php 
                    $resultCount = count($searchResult);
                    echo $resultCount . ' Search Result' . ($resultCount !== 1 ? 's' : '') . ' Found';
                    ?>
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php 
                foreach($searchResult as $listing) {
                    require __DIR__ . '/../views/propertycard.php';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>