        <main class="flex-1 p-8">
            <h1 class="adminpanel-heading">Admin Dashboard</h1>

            
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Total Listings</h3>
                    <p class="text-2xl font-bold text-[#1A5C38] mt-2"><?php echo $listingCount['count']?></p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Total Users</h3>
                    <p class="text-2xl font-bold text-[#1A5C38] mt-2"><?php echo $userCount['count']?></p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Total Land Valuation</h3>
                    <p class="text-2xl font-bold text-[#1A5C38] mt-2">LKR <?php echo number_format($propertyValuation['total_valuation'] / 1000000, 2, '.', ',') . 'M'; ?></p>
                </div>
            </div>

           
            <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                <h2 class="text-xl font-bold text-[#1A5C38] mb-4">Recent Listings</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-gray-700">
                        <thead>
                            <tr class="border-b">
                                <th class="py-2 px-4">Listing ID</th>
                                <th class="py-2 px-4">Title</th>
                                <th class="py-2 px-4">Price</th>
                                <th class="py-2 px-4">Status</th>
                                <?php foreach ($top6 as $listing) {
                                $priceDisplay = "Rs. {$listing['Price']}";
                                if (strtolower($listing['ListingType']) === 'renting') {
                                    $priceDisplay .= "/month";
                                }

                                echo <<<HTML
                                    <tr class="border-b">
                                        <td class="py-2 px-4">{$listing['ListingId']}</td>
                                        <td class="py-2 px-4">{$listing['Title']}</td>
                                        <td class="py-2 px-4 text-red-600">{$priceDisplay}</td>
                                        <td class="py-2 px-4">{$listing['Status']}</td>
                                    </tr>
                                HTML;
                            }
                            ?>
                            </tr>
                        </thead>
                        <tbody>



                        </tbody>
                    </table>
                </div>
            </div>

            
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold text-[#1A5C38] mb-4">User Management</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-gray-700">
                        <thead>
                            <tr class="border-b">
                                <th class="py-2 px-4">User ID</th>
                                <th class="py-2 px-4">First Name</th>
                                <th class="py-2 px-4">Last Name</th>
                                <th class="py-2 px-4">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php foreach ($users as $user) {
                                echo <<<HTML
                                    <tr class="border-b">
                                        <td class="py-2 px-4">{$user['UserId']}</td>
                                        <td class="py-2 px-4">{$user['FirstName']}</td>
                                        <td class="py-2 px-4">{$user['LastName']}</td>
                                        <td class="py-2 px-4">{$user['UserRole']}</td>
                                    </tr>
                                HTML;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>