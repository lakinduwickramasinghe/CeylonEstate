    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h2 class="text-3xl font-bold text-[#1A5C38] mb-6">Manage Users</h2>

        <!-- Top Buttons for Adding User Types -->
        <div class="flex space-x-4 mb-6">
            <button class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add Admin</button>
            <button class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add Seller</button>
            <button class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add Buyer</button>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
            <input type="text" id="searchInput" placeholder="Search users..." class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" onkeyup="searchUsers()">
        </div>

        <!-- Users Datagrid -->
        <div class="bg-white rounded-lg shadow-lg overflow-x-auto mb-4">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-[#1A5C38] text-white">
                        <th class="p-3 text-left"><input type="checkbox" id="selectAll" onclick="toggleSelectAll()"></th>
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Email</th>
                        <th class="p-3 text-left">Role</th>
                        <th class="p-3 text-left">Status</th>
                    </tr>
                </thead>
                <tbody id="usersTable">

            </tbody>
            </table>
        </div>

        <!-- Action Buttons Below Table -->
        <div class="flex space-x-4 mb-6">
            <button class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add</button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-all duration-300">Edit</button>
            <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-all duration-300">Delete</button>
        </div>


        
    </main>

    
