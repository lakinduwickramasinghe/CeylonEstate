<?php

require_once __DIR__ . '/../models/listingModel.php';
require_once __DIR__ . '/../models/userModel.php';

class listingController
{
    public function load()
    {
        $userModel = new UserModel();
        $result = $userModel->isloggedin();
        if($result =='false') {
            header("Location: /ceylonestatefinal/public/login");
            exit();
        }
        if($_SESSION['user_role'] == 'Buyer'){
            header("Location: /ceylonestatefinal/public");
            exit();
        }
        require_once __DIR__ . '/../views/createlisting.php';
    }
    public function createListing(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $propertyType = $_POST['propertyType'];
            $areaSize = (int)$_POST['areaSize'];
            $bedrooms = (int)$_POST['bedrooms'];
            $bathrooms = (int)$_POST['bathrooms'];
            $listingType = $_POST['listingType'];
            $price = (float)$_POST['price'];
            $status = 'Available';
            $addressLine01 = $_POST['addressLine01'];
            $addressLine02 = $_POST['addressLine02'];
            $city = $_POST['city'];
            $zipCode = $_POST['zipCode'];
            $userId = $_SESSION['user_id'] ?? null;
            
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $imageData = file_get_contents($_FILES['image']['tmp_name']);
            
            $Listing = new ListingModel();
            $Listing->createListing(
                $title,
                $description,
                $areaSize,
                $bedrooms,
                $bathrooms,
                $propertyType,
                $listingType,
                $status,
                $userId,
                $addressLine01,
                $addressLine02,
                $city,
                $zipCode,
                $price,
                $imageData
            );
            if($_SESSION['user_role'] == 'Admin') {
                header("Location: /ceylonestatefinal/public/adminpanel/load/listings");
            }
            else{
                header("Location: /ceylonestatefinal/public/updateprofile/managelisting");
            }
            exit();
        }}
    }

    public function loadupdatelisting($id=null,$authLevel=null){
        if(!isset($id)){
            header("Location: /ceylonestatefinal/public/updateprofile/managelisting");
            exit();
        }
        $ListingModel = new ListingModel();
        $listingId = $id;
        if(isset($authLevel)){
            $authLevel = $authLevel;
        }
        if ($listingId) {
            $listing = $ListingModel->getListingById($listingId);
            if ($listing) {
                require_once __DIR__ . '/../views/updatelisting.php';
            } else {
                echo "Listing not found.";
            }
        } else {
            echo "No listing ID provided.";
        }
    }
    public function updatelisting()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $authLevel = $_POST['authLevel'] ?? null;
            $listingId = $_POST['ListingID'];
            $title = $_POST['title'];
            $description = $_POST['Description'];
            $propertyType = $_POST['PropertyType'];
            $areaSize = (int)$_POST['AreaSize'];
            $bedrooms = (int)$_POST['Bedrooms'];
            $bathrooms = (int)$_POST['Bathrooms'];
            $listingType = $_POST['ListingType'];
            $price = (float)$_POST['Price'];
            $status = 'Available';
            $addressLine01 = $_POST['AddressLine01'];
            $addressLine02 = $_POST['AddressLine02'];
            $city = $_POST['City'];
            $zipCode = $_POST['ZipCode'];

            
            $Listing = new ListingModel();
            $result = $Listing->updateListing($listingId,$title,$description,$areaSize,$bedrooms,$bathrooms,$propertyType,$listingType,$status,$addressLine01,$addressLine02,$city,$zipCode,$price);
            if($result){
                if($authLevel !=null) {
                header("Location: /ceylonestatefinal/public/adminpanel/load/listings");}
                else{
                header("Location: /ceylonestatefinal/public/updateprofile/managelisting");
                }
            }
            else{
                echo "Update Failed";
            }
            exit();
        }
        else {
            echo "Form not submitted.";
        }
    }

    public function deletelisting($id,$authLevel=null){
        $listingId = $id;
        $Listing = new ListingModel();
        $Listing->deleteListing($listingId);

        if(isset($authLevel)) {
            header("Location: /ceylonestatefinal/public/adminpanel/load/listings");
        }
        else{
            header("Location: /ceylonestatefinal/public/updateprofile/managelisting");
        }
    }
}