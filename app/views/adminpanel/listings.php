

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-[#1A5C38]">Manage Listings</h2>
            <a href="index.php?page=add-listing" class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add New Listing</a>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
            <input type="text" id="searchInput" placeholder="Search listings..." class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" onkeyup="searchListings()">
        </div>

        <!-- Listings Table -->
        <div class="bg-white rounded-lg shadow-lg overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-[#1A5C38] text-white">
                        <th class="p-3 text-left">Title</th>
                        <th class="p-3 text-left">Price (Rs.)</th>
                        <th class="p-3 text-left">Type</th>
                        <th class="p-3 text-left">Property Type</th>
                        <th class="p-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody id="listingsTable">
                    <?php


                    foreach ($listings as $listing) {
                        echo <<<HTML
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="p-3">{$listing['Title']}</td>
                            <td class="p-3">{$listing['Price']}</td>
                            <td class="p-3">{$listing['ListingType']}</td>
                            <td class="p-3">{$listing['PropertyType']}</td>
                            <td class="p-3 space-x-2">
                                <a href="admin-edit-listing.php?id={$listing['ListingId']}" class="bg-blue-600 text-white px-2 py-1 rounded hover:bg-blue-700 transition-all duration-300">Edit</a>
                                <button class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700 transition-all duration-300">Delete</button>
                            </td>
                        </tr>
                        HTML;
                    }
                    ?>
                </tbody>
            </table>
        </div>
