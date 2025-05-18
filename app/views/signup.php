<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header -->
    <header class="bg-[#1A5C38] text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-2">
                <img src="logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                <span class="text-xl font-bold">CEYLON ESTATE</span>
            </div>
            <nav class="flex space-x-6 items-center">
                <a href="#" class="hover:underline">HOME</a>
                <a href="#" class="hover:underline">SELL</a>
                <a href="#" class="hover:underline">RENT</a>
                <a href="#" class="hover:underline">ABOUT US</a>
                <button class="bg-white text-[#1A5C38] px-4 py-2 rounded hover:bg-gray-200">POST AN ADD</button>
                <div class="w-6 h-6">
                    <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->

    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold text-center mb-6 text-[#1A5C38]">SIGN UP</h2>
            <form method="POST" action="http://localhost/ceylonestatefinal/public/index.php?page=signup-controller">
            <div class="mb-4">
                    <label for="first-name" class="block text-sm font-medium mb-1">First Name :</label>
                    <input type="text" required name="firstname" id="first-name"  placeholder="John" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                <div class="mb-4">
                    <label for="last-name" class="block text-sm font-medium mb-1">Last Name :</label>
                    <input type="text" required name="lastname" id="last-name" placeholder="Smith" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-1">Email :</label>
                    <input type="email" name="email" required id="email" placeholder="abc@gmail.com" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium mb-1">Password :</label>
                    <input type="password" required name="password" id="password" placeholder="***********" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                
                <div class="mb-4">
                    <label for="contact-number" class="block text-sm font-medium mb-1">Contact Number :</label>
                    <input type="tel" required name="contactnumber" id="contact-number" placeholder="0771812658" class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                <div class="mb-6 flex items-center">
                    <input type="checkbox" name="terms" id="terms" class="mr-2">
                    <label for="terms" class="text-sm">Agree to Terms and Conditions</label>
                </div>
                <div class="mb-4 text-sm text-blue-600">
                    <a href="http://localhost/ceylonestatefinal/public/index.php?page=login" class="hover:underline">Already has an account? Log in</a>
                </div>
                <button type="submit" class="w-full bg-[#1A5C38] text-white py-2 rounded hover:bg-[#154c2f]">Sign Up</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-2">
                <img src="logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                <span class="text-xl font-bold">CEYLON ESTATE</span>
            </div>
            <nav class="flex space-x-6">
                <a href="#" class="hover:underline">Sell</a>
                <a href="#" class="hover:underline">Rent</a>
                <a href="#" class="hover:underline">About Us</a>
                <a href="#" class="hover:underline">Post An Add</a>
                <a href="#" class="hover:underline">My Profile</a>
            </nav>
            <p class="text-sm">Copyright © Ceylon Estate. All Right Reserved.</p>
        </div>
    </footer>
</body>
</html>