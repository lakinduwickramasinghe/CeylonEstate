<main class="flex-grow flex items-center justify-center">
    <div class="p-10 rounded-lg border border-gray-300 shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6 text-[#1A5C38]">Add User</h2>
        <form method="POST" action="http://localhost/ceylonestatefinal/public/index.php?page=signup-controller">
            <div class="grid grid-cols-2 gap-6 mb-6">
                <input type="hidden" name="authLevel" value="admin">
                <!-- Left Column -->
                <div>
                    <div class="mb-4">
                        <label for="first-name" class="block text-sm font-medium mb-1 text-gray-700">First Name :</label>
                        <input type="text" required name="firstname" id="first-name" placeholder="John" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38] transition-all duration-300">
                    </div>
                    <div class="mb-4">
                        <label for="last-name" class="block text-sm font-medium mb-1 text-gray-700">Last Name :</label>
                        <input type="text" required name="lastname" id="last-name" placeholder="Smith" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38] transition-all duration-300">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium mb-1 text-gray-700">Email :</label>
                        <input type="email" name="email" required id="email" placeholder="abc@gmail.com" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38] transition-all duration-300">
                    </div>
                </div>
                <!-- Right Column -->
                <div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium mb-1 text-gray-700">Password :</label>
                        <input type="password" required name="password" id="password" placeholder="***********" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38] transition-all duration-300">
                    </div>
                    <div class="mb-4">
                        <label for="contact-number" class="block text-sm font-medium mb-1 text-gray-700">Contact Number :</label>
                        <input type="tel" required name="contactnumber" id="contact-number" placeholder="0771812658" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38] transition-all duration-300">
                    </div>
                    <div class="mb-4">
                        <label for="UserRole" class="block text-sm font-medium text-gray-700">User Role:</label>
                        <select id="UserRole" name="UserRole" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38] transition-all duration-300" required>
                            <option value="Buyer">Buyer</option>
                            <option value="Seller">Seller</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full bg-[#1A5C38] text-white py-2 rounded hover:bg-[#154c2f] shadow-md transition-all duration-300">Sign Up</button>
        </form>
    </div>
</main>