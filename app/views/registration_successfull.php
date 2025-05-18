<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - Registration Successful</title>
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
            <nav class="flex items-center space-x-6">
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=home" class="hover:underline">HOME</a>
                <a href="#" class="hover:underline">SELL</a>
                <a href="#" class="hover:underline">RENT</a>
                <a href="#" class="hover:underline">ABOUT US</a>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=login">
                    <button class="bg-white text-[#1A5C38] px-4 py-2 rounded hover:bg-gray-200">Log In</button>
                </a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=signup">
                    <button class="bg-[#2E7D32] text-white px-4 py-2 rounded hover:bg-[#225C26]">Sign Up</button>
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex flex-1 items-center justify-center py-12">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full text-center">
            <!-- Checkmark Icon -->
            <div class="flex justify-center mb-6">
                <div class="w-16 h-16 bg-[#1A5C38] rounded-full flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>
            <!-- Success Message -->
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Registration Successful!</h1>
            <p class="text-gray-600 mb-6">Welcome to Ceylon Estate! Your account has been created successfully. You can now log in to start exploring properties or list your own.</p>
            <!-- Buttons -->
            <div class="flex justify-center space-x-4">
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=login">
                    <button class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Log In Now</button>
                </a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=home">
                    <button class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 transition-all duration-300">Back to Home</button>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-4 mt-auto">
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