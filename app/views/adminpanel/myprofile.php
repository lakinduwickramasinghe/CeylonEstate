<?php 
require_once __DIR__ . '/../../../app/models/userModel.php';
$usermodel = new UserModel();
$user = $usermodel->getUserProfile($_SESSION['user_id']);
?>
    <main class="flex flex-1 py-8">
        <div class="container mx-auto px-4 flex">
            <div class="flex-1 rounded-lg p-6">
                <h2 class="adminpanel-heading">MY PROFILE</h2>
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-10 h-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700"><?php echo isset($user["FirstName"]) ? htmlspecialchars($user["FirstName"]): ''; ?> <?php echo isset($user["LastName"]) ? htmlspecialchars($user["LastName"]): ''; ?></h3>
                </div>
                <form class="space-y-4" method="POST" action="/ceylonestatefinal/public/updateprofile/updateUser">
                    <input type="hidden" name="authLevel" value="admin">
                    <div>
                        <label for="first-name" class="block text-sm font-medium text-gray-700">First Name :</label>
                        <input type="text" name="firstname"<?php echo isset($user["FirstName"]) ? ' value="'. htmlspecialchars($user["FirstName"]).'"' : ''; ?> id="first-name" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name :</label>
                        <input type="text" name="lastname" <?php echo isset($user["LastName"]) ? ' value="'. htmlspecialchars($user["LastName"]).'"' : ''; ?> id="last-name" value="" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email :</label>
                        <input type="email" name="email" <?php echo isset($user["Email"]) ? ' value="'. htmlspecialchars($user["Email"]).'"' : ''; ?> id="email" value="" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]" >
                    </div>
                    <div>
                        <label for="contactnumber" class="block text-sm font-medium text-gray-700">Contact Number :</label>
                        <input type="tel" name="contactnumber"<?php echo isset($user["ContactNumber"]) ? ' value="'. htmlspecialchars($user["ContactNumber"]).'"' : ''; ?> id="contactnumber" value="" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                    </div>
                    <div class="text-center">
                        <a href="/ceylonestatefinal/public/adminpanel/load/myprofile">
                            <button type="button" class="white-button">Cancel</button>
                        </a>

                            <button type="submit" class="green-button">Update Profile</button>

                    </div>
                </form>
            </div>
        </div>
    </main>