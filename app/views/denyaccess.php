<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - Access Denied</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center py-16">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md text-center">
            <h2 class="text-2xl font-bold mb-4 text-[#1A5C38]">Access Denied</h2>
            <p class="text-gray-700 mb-6">You do not have access to continue this task. Please contact an administrator if you believe this is an error.</p>
            <a href="/ceylonestatefinal/public" class="inline-block bg-[#1A5C38] text-white px-6 py-2 rounded hover:bg-[#154c2f] transition-all duration-300">Go Back to Homepage</a>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>