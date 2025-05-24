<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100"> 
    
    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold text-center mb-6 text-[#1A5C38]">SIGN IN</h2>
            <form action="/ceylonestatefinal/public/login/processLogin" method="POST">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-1">Email :</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email here..." class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium mb-1">Password :</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password here..." class="w-full p-2 bg-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-[#1A5C38]">
                </div>
                <div class="flex justify-between text-sm mb-6">
                    <a href="/ceylonestatefinal/public/signup" class="text-black hover:underline">Don't have an account? SIGN UP</a>
                    <a href="#" class="text-blue-600 hover:underline">Forgot Password</a>
                </div>
                <button type="submit" class="w-full bg-[#1A5C38] text-white py-2 rounded hover:bg-[#154c2f]">Sign In</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
    
</body>
</html>