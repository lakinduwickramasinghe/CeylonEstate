        <main class="flex-1 p-8">
            <h1 class="text-3xl font-bold text-[#1A5C38] mb-8">Admin Dashboard</h1>

            <!-- Quick Stats -->
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
                    <h3 class="text-lg font-semibold text-gray-700">Pending Approvals</h3>
                    <p class="text-2xl font-bold text-[#1A5C38] mt-2">12</p>
                </div>
            </div>

            <!-- Recent Listings Table -->
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
                                <th class="py-2 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        <!-- Code block 01 -->

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- User Management Overview -->
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
                                <th class="py-2 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- code block 02 -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>