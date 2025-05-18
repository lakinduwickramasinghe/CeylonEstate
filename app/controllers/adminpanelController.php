<?php 
require_once __DIR__ . '/../models/listingModel.php';
require_once __DIR__ . '/../models/userModel.php';

class apController{

    public function __construct()
    {
    }

    public function loadAdminPanel()
    {
        $listing = new Listing();
        $listingCount = $listing->returnlistingcount();

        $user = new User();
        $userCount = $user->returnusercount();

        $listings = $listing->getAllListings();
        require_once __DIR__ . '/../views/adminpanel.php';


        
    }
}