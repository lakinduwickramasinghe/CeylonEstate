<?php 
require_once __DIR__ . '/../models/listingModel.php';
require_once __DIR__ . '/../models/userModel.php';
require_once __DIR__ . '/../controllers/userController.php';

class apController{

    public function __construct()
    {
    }

    public function loadAdminPanel()
    {
        $userController = new userController();
        $result = $userController->isLoggedin();
        if($result =='false') {
            header("Location: index.php?page=login");
            exit();
        }
        $listing = new Listing();
        $listingCount = $listing->returnlistingcount();

        $user = new User();
        $userCount = $user->returnusercount();

        $users = $user->getAllUsers();

        $listings = $listing->getAllListings();

        $propertyValuation = $listing->getPropertyValuation();
        require_once __DIR__ . '/../views/adminpanel.php';


        
    }
}