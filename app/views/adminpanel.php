<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceylon Estate - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php

        if (!isset($_SESSION['user_role'])) {
            echo "Session not set";
            exit();
            header("Location: index.php?page=login");
        }
            if ($_SESSION['user_role'] != 'Admin') { 
                header("Location: index.php?page=login");
                exit();
            }

?>    
<body class="bg-green-50 min-h-screen flex flex-col">

    <!-- Header -->
    <?php require_once __DIR__ . '/../views/includes/header.php'; ?>

    <!-- Main Content -->
    <div class="flex flex-1">
        <!-- Sidebar -->
    <?php
    require_once __DIR__ . '/../../app/controllers/userController.php';

    $currentView = $_GET['view'] ?? 'dashboard';
    $userModel = new User();
    $userId = $_SESSION['user_id'] ?? null;
    $user = $userModel->getUserProfile($userId);


    require_once __DIR__ . '/../../app/controllers/listingController.php';
    $listingController = new listingController();
    $listings = $listingController->returnAllListings();

    
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

            <a href="index.php?page=adminpanel&view=users&table=admin"
            class="block <?= $currentView === 'users' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Users
            </a>

            <a href="index.php?page=adminpanel&view=review"
            class="block <?= $currentView === 'review' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            Reviews
            </a>

            <a href="index.php?page=adminpanel&view=myprofile"
            class="block <?= $currentView === 'myprofile' ? 'text-[#1A5C38] font-semibold bg-gray-100' : 'text-gray-700' ?> hover:bg-gray-100 p-2 rounded">
            My Profile
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