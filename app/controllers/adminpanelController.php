<?php 
require_once __DIR__ . '/../models/listingModel.php';
require_once __DIR__ . '/../models/userModel.php';
require_once __DIR__ . '/../controllers/userController.php';

class AdminpanelController{

    public function load($currentPage = null, $table = null){
        $page = $currentPage;
        $tableName = $table;
        $userController = new userController();
        $result = $userController->isLoggedin();
        if($result =='false') {
            header("Location: /ceylonestatefinal/public/login");
            exit();
        }
        $listing = new ListingModel();
        $listingCount = $listing->returnlistingcount();
        $user = new UserModel();
        $userCount = $user->returnusercount();
        $users = $user->getAllUsers();
        $listings = $listing->getAllListings();
        $propertyValuation = $listing->getPropertyValuation();

        $top6 = $listing->getRecentListings();

        require __DIR__ . '/../views/adminpanel.php';
    }

    public function loadAdminPanel()
    {



        
    }
}