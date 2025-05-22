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
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>


    <main class="flex flex-1 items-center justify-center py-12">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full text-center">
            <div class="flex justify-center mb-6">
                <div class="w-16 h-16 bg-[#1A5C38] rounded-full flex items-center justify-center">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Registration Successful!</h1>
            <p class="text-gray-600 mb-6">Welcome to Ceylon Estate! Your account has been created successfully. You can now log in to start exploring properties or list your own.</p>

            <div class="flex justify-center space-x-4">
                <a href="index.php?page=login">
                    <button class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Log In Now</button>
                </a>
                <a href="index.php?page=home">
                    <button class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 transition-all duration-300">Back to Home</button>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>