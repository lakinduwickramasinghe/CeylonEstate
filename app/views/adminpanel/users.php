
<main class="flex-1 p-8">
    <h2 class="text-3xl font-bold text-[#1A5C38] mb-6">Manage Users</h2>

    <div class="flex space-x-4 mb-6">
        <a href="index.php?page=adminpanel&view=users&table=admin">
            <button class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Admin</button>
        </a>
        <a href="index.php?page=adminpanel&view=users&table=seller">
            <button class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Seller</button>
        </a>
        <a href="index.php?page=adminpanel&view=users&table=buyer"> 
            <button class="bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Buyer</button>
        </a>        
    </div>

    <div class="flex items-center justify-between mb-6">
        <input type="text" id="searchInput" placeholder="Search users..." class="w-2/3 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">

        <a href="index.php?page=adminpanel&view=adduser">
            <button class="ml-4 bg-[#1A5C38] text-white px-4 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">
                + Add User
            </button>
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-lg overflow-x-auto mb-4">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-[#1A5C38] text-white">
                    <th class="p-3 text-left"><input type="checkbox" id="selectAll"></th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Role</th>
                    <th class="p-3 text-left">Joined Date</th>
                    <th class="p-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody id="usersTable">
                <?php 
                $table = $_GET['table'] ?? 'admin';

                require_once __DIR__ . '/../../../app/controllers/userController.php'; 
                $userController = new userController();
                $users = $userController->returnUsersOnRole($table);

                if($users) {
                    foreach($users as $user) {
                        echo "<tr>";
                        echo "<td class='p-3'><input type='checkbox' class='userCheckbox' value='{$user['UserId']}'></td>";
                        echo "<td class='p-3'>{$user['FirstName']}</td>";
                        echo "<td class='p-3'>{$user['Email']}</td>";
                        echo "<td class='p-3'>{$user['UserRole']}</td>";
                        echo "<td class='p-3'>{$user['CreatedAt']}</td>";
                        echo "<td class='p-3 space-x-2'>
                                <a href='index.php?page=adminpanel&view=edituser&id={$user['UserId']}' class='text-blue-600 hover:underline'>Edit</a>
                                <a href='' class='text-red-600 hover:underline'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center p-3'>No users found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
