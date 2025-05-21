<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen flex flex-col">

    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <!-- Main Content -->
    <div class="flex flex-1">
        <!-- Sidebar -->
    <?php
    $currentView = $_GET['view'] ?? 'dashboard';
    ?>

    <aside class="bg-white w-64 p-6 shadow-lg">
        <nav class="space-y-4">
            <a href="index.php?page=adminpanel&view=dashboard"
            class="block <?= $currentView === 'dashboard' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Dashboard
            </a>

            <a href="index.php?page=adminpanel&view=listings"
            class="block <?= $currentView === 'listings' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Listings
            </a>

            <a href="index.php?page=adminpanel&view=users"
            class="block <?= $currentView === 'users' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Users
            </a>

            <a href="index.php?page=adminpanel&view=analytics"
            class="block <?= $currentView === 'analytics' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Analytics
            </a>

            <a href="index.php?page=adminpanel&view=settings"
            class="block <?= $currentView === 'settings' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Settings
            </a>
        </nav>
    </aside>


        <!-- Main Dashboard Content -->
        <?php
        $view = $_GET['view'];
        $viewFile = __DIR__ . '/../views/adminpanel/' . $view . '.php';
        require_once $viewFile; ?>
    </div>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>