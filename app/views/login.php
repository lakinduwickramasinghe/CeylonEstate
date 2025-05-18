<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="st  stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate</title>
</head>
<body> 
    


<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header -->
     <?php
        if(isset($_SESSION['user_id']) || isset($_SESSION['user_role'])) {
            $email = $_SESSION['user_email'];
            echo <<<HTML
            <header class="bg-[#1A5C38] text-white py-4">
                <div class="container mx-auto flex justify-between items-center px-4">
                    <div class="flex items-center space-x-2">
                        <img src="/CeylonEstateFinal/public/images/logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                        <span class="text-xl font-bold">CEYLON ESTATE</span>
                    </div>
                    <nav class="flex items-center space-x-6">
                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=home" class="hover:underline">HOME</a>
                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=forsale" class="hover:underline">SELL</a>
                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=forrent" class="hover:underline">RENT</a>
                        <a href="http://localhost/ceylonestatefinal/public/index.php?page=aboutus" class="hover:underline">ABOUT US</a>
                    </nav>
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col items-center">
                            <a href="http://localhost/ceylonestatefinal/public/index.php?page=user-profile" class="flex flex-col items-center">
                                <div class="w-6 h-6">
                                    <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                                <span class="text-sm mt-1">{$email}</span>
                            </a>
                        </div>
                        <form action="http://localhost/ceylonestatefinal/public/index.php?page=logout-controller" method="POST">
                            <button class="bg-white text-[#1A5C38] px-3 py-1 rounded hover:bg-gray-200 text-sm">Logout</button>
                        </form>
                    </div>
                </div>
            </header>
            HTML;
        } else {
            echo <<<HTML
<header class="bg-[#1A5C38] text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
        <div class="flex items-center space-x-2">
            <img src="/CeylonEstateFinal/public/images/logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
            <span class="text-xl font-bold">CEYLON ESTATE</span>
        </div>
        <nav class="flex items-center space-x-6">
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=home" class="hover:underline">HOME</a>
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=forsale" class="hover:underline">SELL</a>
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=forrent" class="hover:underline">RENT</a>
            <a href="http://localhost/ceylonestatefinal/public/index.php?page=aboutus" class="hover:underline">ABOUT US</a>
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
HTML;
    }
    ?>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold text-center mb-6">SIGN IN</h2>
            <form action="http://localhost/ceylonestatefinal/public/index.php?page=login-controller" method="POST">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-1">Email :</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email here..." class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-green-700">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium mb-1">Password :</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password here..." class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-green-700">
                </div>
                <div class="flex justify-between text-sm mb-6">
                    <a href="http://localhost/ceylonestatefinal/public/index.php?page=signup" class="text-black hover:underline">Don't have an account? SIGN UP</a>
                    <a href="#" class="text-blue-600 hover:underline">Forgot Password</a>
                </div>
                <button type="submit" class="w-full bg-green-700 text-white py-2 rounded hover:bg-green-800">Sign In</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-2">
                <img src="/CeylonEstateFinal/public/images/logo.png" alt="Ceylon Estate Logo" class="h-8 w-8">
                <span class="text-xl font-bold">CEYLON ESTATE</span>
            </div>
            <nav class="flex space-x-6">
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=forsale" class="hover:underline">Sell</a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=forrent" class="hover:underline">Rent</a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=aboutus" class="hover:underline">About Us</a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=adds-listing" class="hover:underline">Post An Add</a>
                <a href="http://localhost/ceylonestatefinal/public/index.php?page=user-profile" class="hover:underline">My Profile</a>
            </nav>
            <p class="text-sm">Copyright © Ceylon Estate. All Right Reserved.</p>
        </div>
    </footer>
    
</body>
</html>
