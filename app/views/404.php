<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - 404 Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

     <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <main class="flex flex-1 items-center justify-center py-12">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full text-center">
            <div class="flex justify-center mb-6">
                <div class="w-20 h-20 bg-[#1A5C38] rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <h1 class="text-3xl font-bold text-gray-800 mb-2">404 - Page Not Found</h1>
            <p class="text-gray-600 mb-2">The requested path <span class="font-semibold text-gray-800"><?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?></span> was not found.</p>
            <p class="text-gray-600 mb-4">Oops! It seems the page you’re looking for doesn’t exist or has been moved. Let’s get you back on track!</p>
            <p class="text-sm text-gray-500 mb-6">Error logged at 01:05 AM +0530, Tuesday, May 20, 2025</p>
            <div class="flex justify-center space-x-4">
                <a href="/ceylonestatefinal/public/">
                    <button class="bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Back to Home</button>
                </a>
                <a href="mailto:lakindusudaraka@gmail.com">
                    <button class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 transition-all duration-300">Contact Support</button>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>