<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
    if ($_SESSION['user_role'] != 'Admin') { 
        header("Location: /ceylonestatefinal/public/home/denyaccess");
        exit();
    }
?>    
<body class="bg-green-50 min-h-screen flex flex-col">

    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <!-- Main Content -->
    <div class="flex flex-1">
        <!-- Sidebar -->
    <aside class="bg-white w-64 p-6 shadow-lg">
        <nav class="space-y-4">
            <a href="/ceylonestatefinal/public/adminpanel/load/dashboard"
            class="block <?= $currentView === 'dashboard' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Dashboard
            </a>

            <a href="/ceylonestatefinal/public/adminpanel/load/listings"
            class="block <?= $currentView === 'listings' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Listings
            </a>

            <a href="/ceylonestatefinal/public/adminpanel/load/users/admin"
            class="block <?= $currentView === 'users' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Users
            </a>

            <a href="/ceylonestatefinal/public/adminpanel/load/review"
            class="block <?= $currentView === 'review' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Reviews
            </a>

            <a href="/ceylonestatefinal/public/adminpanel/load/myprofile"
            class="block <?= $currentView === 'myprofile' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            My Profile
            </a>
        </nav>
    </aside>


        <!-- loading main dashboard content -->
        <?php
        $view = $page;
        $viewFile = __DIR__ . '/../views/adminpanel/' . $view . '.php';
        require_once $viewFile; ?>
    </div>

    <!-- Footer -->
    <?php require_once __DIR__ . '/../views/includes/footer.php'; ?>
</body>
</html>