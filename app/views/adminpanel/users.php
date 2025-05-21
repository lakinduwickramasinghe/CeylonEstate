<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Users | Ceylon Estate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#1A5C38] text-white p-6">
        <h1 class="text-2xl font-bold mb-8">Ceylon Estate Admin</h1>
        <nav>
            <ul class="space-y-4">
                <li><a href="admin-dashboard.php" class="block p-2 rounded hover:bg-[#154c2f] transition-all duration-300">Dashboard</a></li>
                <li><a href="admin-listings.php" class="block p-2 rounded hover:bg-[#154c2f] transition-all duration-300">Listings</a></li>
                <li><a href="admin-users.php" class="block p-2 rounded bg-[#154c2f] transition-all duration-300">Users</a></li>
                <li><a href="admin-settings.php" class="block p-2 rounded hover:bg-[#154c2f] transition-all duration-300">Settings</a></li>
                <li><a href="logout.php" class="block p-2 rounded hover:bg-[#154c2f] transition-all duration-300">Logout</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h2 class="text-3xl font-bold text-[#1A5C38] mb-6">Manage Users</h2>

        <!-- Top Buttons for Adding User Types -->
        <div class="flex space-x-4 mb-6">
            <button onclick="openAddModal('Admin')" class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add Admin</button>
            <button onclick="openAddModal('Seller')" class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add Seller</button>
            <button onclick="openAddModal('Buyer')" class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add Buyer</button>
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
                    <?php
                    // Sample data - replace with actual database query
                    session_start();
                    $currentAdminEmail = $_SESSION['admin_email'] ?? 'currentadmin@example.com'; // Placeholder for current admin
                    $users = [
                        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com', 'role' => 'Buyer', 'status' => 'Active'],
                        ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com', 'role' => 'Seller', 'status' => 'Active'],
                        ['id' => 3, 'name' => 'Mike Johnson', 'email' => $currentAdminEmail, 'role' => 'Admin', 'status' => 'Active'],
                    ];

                    foreach ($users as $user) {
                        $disableCheckbox = $user['email'] === $currentAdminEmail ? 'disabled' : '';
                        echo <<<HTML
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="p-3"><input type="checkbox" class="userCheckbox" value="{$user['id']}" {$disableCheckbox}></td>
                            <td class="p-3">{$user['name']}</td>
                            <td class="p-3">{$user['email']}</td>
                            <td class="p-3">{$user['role']}</td>
                            <td class="p-3 {$user['status'] === 'Active' ? 'text-green-600' : 'text-red-600'}">{$user['status']}</td>
                        </tr>
                        HTML;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Action Buttons Below Table -->
        <div class="flex space-x-4 mb-6">
            <button onclick="openAddModal('Admin')" class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add</button>
            <button onclick="editSelectedUser()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-all duration-300">Edit</button>
            <button onclick="deleteSelectedUsers()" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-all duration-300">Delete</button>
        </div>

        <!-- Add User Modal -->
        <div id="addUserModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                <h3 class="text-xl font-bold text-[#1A5C38] mb-4">Add New User</h3>
                <form id="addUserForm" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    </div>
                    <div>
                        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                        <select id="role" name="role" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                            <option value="Admin">Admin</option>
                            <option value="Seller">Seller</option>
                            <option value="Buyer">Buyer</option>
                        </select>
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button type="button" onclick="closeModal()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 transition-all duration-300">Cancel</button>
                        <button type="submit" class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        const addUserModal = document.getElementById('addUserModal');
        const addUserForm = document.getElementById('addUserForm');
        const selectAllCheckbox = document.getElementById('selectAll');
        let selectedRole = 'Admin';

        // Open modal with preselected role
        function openAddModal(role) {
            selectedRole = role;
            document.getElementById('role').value = role;
            addUserModal.classList.remove('hidden');
        }

        // Close modal
        function closeModal() {
            addUserModal.classList.add('hidden');
            addUserForm.reset();
        }

        // Handle form submission
        addUserForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const role = document.getElementById('role').value;

            // Placeholder for AJAX call to add user
            if (confirm(`Add ${role} ${name} with email ${email}?`)) {
                alert(`${role} added successfully!`);
                closeModal();
                location.reload();
            }
        });

        // Search users
        function searchUsers() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#usersTable tr');

            rows.forEach(row => {
                const name = row.cells[1].textContent.toLowerCase();
                const email = row.cells[2].textContent.toLowerCase();
                if (name.includes(input) || email.includes(input)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Toggle select all checkboxes
        function toggleSelectAll() {
            const checkboxes = document.querySelectorAll('.userCheckbox');
            checkboxes.forEach(checkbox => {
                if (!checkbox.disabled) {
                    checkbox.checked = selectAllCheckbox.checked;
                }
            });
        }

        // Get selected users
        function getSelectedUsers() {
            const checkboxes = document.querySelectorAll('.userCheckbox:checked');
            return Array.from(checkboxes).map(checkbox => checkbox.value);
        }

        // Edit selected user
        function editSelectedUser() {
            const selectedUsers = getSelectedUsers();
            if (selectedUsers.length !== 1) {
                alert('Please select exactly one user to edit.');
                return;
            }
            window.location.href = `admin-edit-user.php?id=${selectedUsers[0]}`;
        }

        // Delete selected users
        function deleteSelectedUsers() {
            const selectedUsers = getSelectedUsers();
            if (selectedUsers.length === 0) {
                alert('Please select at least one user to delete.');
                return;
            }
            if (confirm(`Are you sure you want to delete ${selectedUsers.length} user(s)?`)) {
                // Placeholder for AJAX call to delete users
                alert(`User(s) ${selectedUsers.join(', ')} deleted!`);
                location.reload();
            }
        }
    </script>
</body>
</html>