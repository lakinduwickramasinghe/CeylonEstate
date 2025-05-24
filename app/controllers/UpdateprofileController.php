<?php

require_once __DIR__ . '/../models/userModel.php';
require_once __DIR__ . '/../models/reviewModel.php';
require_once __DIR__ . '/../models/listingModel.php';


class UpdateprofileController {

    public function load() {
        $userModel = new UserModel();
        $result = $userModel->isloggedin();
        if($result =='false') {
            header("Location: /ceylonestatefinal/public/login");
            exit();
        }
        $userId = $_SESSION['user_id'];
        $user = $userModel->getUserProfile($userId);
        require_once __DIR__ . '/../views/updateprofile.php';
    }
        public function myreviews() {
        $userModel = new UserModel();
        $result = $userModel->isloggedin();
        if($result =='false') {
            header("Location: /public/adminpanel/login");
            exit();
        }
        $userId = $_SESSION['user_id'];
        $reviewModel = new ReviewModel();
        $reviews = $reviewModel->getUserReviews($userId);
        require_once __DIR__ . '/../views/myreviews.php';
    }
    public function managelisting(){
        if($_SESSION['user_role'] == 'Buyer'){
        header("Location: /ceylonestatefinal/public/updateprofile");
        exit();
        }
        $Listing = new ListingModel();
        $userId = $_SESSION['user_id'] ?? null;
 
        $listings = $Listing->getAllListingsByUserId($userId);
        require_once __DIR__ . '/../views/seller_managelisting.php';
    }
    public function updateUser() {
        $userModel = new UserModel();
        $result = $userModel->isloggedin();
        if($result =='false') {
            header("Location: /public/adminpanel/login");
            exit();
        }
        $userId = $_SESSION['user_id'];
        $user = $userModel->getUserProfile($userId);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $email = $_POST['email'];
            $contactNumber = $_POST['contactnumber'];
        
            $userModel->updateUserProfile($userId, $firstName, $lastName, $email, $contactNumber);

            if($_SESSION['user_role'] == 'Admin') {
                header("Location: /ceylonestatefinal/public/adminpanel/load/myprofile");
            } else {
                header("Location: /ceylonestatefinal/public/updateprofile");
            }            
            exit();
        }
    }
    public function deleteUser($userId) {
        $userModel = new UserModel();
        $result = $userModel->isloggedin();
        
        $response = $userModel->deleteUser($userId);

        if($response=='foreign_key_constraint'){
            echo "<script>
        alert('You cannot delete this user because they have listings or reviews associated with them.');
        window.location.href = '/ceylonestatefinal/public/adminpanel/load/users/admin';
    </script>";
        }
        exit();
    }
}