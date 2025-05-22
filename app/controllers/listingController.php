<?php 
require_once __DIR__ . '/../models/listingModel.php';

class listingController
{
    public function __construct()
    {
    }
    public function loadHomePage()
    {
        $Listing = new Listing();
        $forsale = $Listing->top6forsale();
        $fortent = $Listing->top6forrent();
        require_once __DIR__ . '/../views/home.php';
    }

    public function viewforsalepage()
    {
        $Listing = new Listing();
        $forsale = $Listing->getAllForSaleListings();
        require_once __DIR__ . '/../views/forsale.php';
    }
    public function returnAllListings(){
        $Listing = new Listing();
        $data = $Listing->getAllForSaleListings();
        return $data;
    }

        public function viewforrentpage()
    {
        $Listing = new Listing();
        $forsale = $Listing->getAllForRentListings();
        require_once __DIR__ . '/../views/forrent.php';
    }
    public function managelisting(){
        $Listing = new Listing();
        $userId = $_SESSION['user_id'] ?? null;
 
        $listings = $Listing->getAllListingsByUserId($userId);
        require_once __DIR__ . '/../views/seller_managelisting.php';
    }

    public function loadeditlisting()
    {
        $Listing = new Listing();
        $listingId = $_GET['id'] ?? null;
        $authLevel = $_GET['authLevel'] ?? null;
        if ($listingId) {
            $listing = $Listing->getListingById($listingId);
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
            $listingId = $_SESSION['listingid'];
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

            
                $Listing = new Listing();
                $result = $Listing->updateListing($listingId,$title,$description,$areaSize,$bedrooms,$bathrooms,$propertyType,$listingType,$status,$addressLine01,$addressLine02,$city,$zipCode,$price);
                
            if(isset($_POST['authLevel'])) {
                header("Location: index.php?page=adminpanel&view=listings");
            }
            else{
                header("Location: index.php?page=manage-listing");
            }
        }
        else {
            echo "Form not submitted.";
        }
    }

    public function deleteListing()
    {
        $listingId = $_GET['id'] ?? null;
        if ($listingId) {
            $Listing = new Listing();
            $Listing->deleteListing($listingId);

        } else {
            echo "No listing ID provided.";
        }
        if(isset($_POST['authLevel'])) {
            header("Location: index.php?page=adminpanel&view=listings");
        }
        else{
            header("Location: index.php?page=manage-listing");
        }
    }
    
    public function viewListing()
    {
        $Listing = new Listing();
        $listingId = $_GET['id'] ?? null;
        if ($listingId) {
            $listing = $Listing->getListingById($listingId);
            if ($listing) {
                require_once __DIR__ . '/../views/viewlisting.php';
            } else {
                echo "Listing not found.";
            }
        } else {
            echo "No listing ID provided.";
        }
    }

    public function sellsearch(){
        $type = $_GET['property-type'] ?? null;
        $minprice = $_GET['min-price'];
        $maxprice = $_GET['max-price'];
        $keyword = $_GET['keyword'];

        $listingModel = new Listing();
        $searchResult = $listingModel->searchforsalelisting($type,$minprice,$maxprice,$keyword);
        require_once __DIR__ . '/../views/sellsearch.php';
    }

        public function rentsearch(){
        $type = $_GET['property-type'] ?? null;
        $minprice = $_GET['min-price'];
        $maxprice = $_GET['max-price'];
        $keyword = $_GET['keyword'];

        $listingModel = new Listing();
        $searchResult = $listingModel->searchforrentlisting($type,$minprice,$maxprice,$keyword);
        require_once __DIR__ . '/../views/rentsearch.php';
    }

    public function createListing()
    {
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
            

            $Listing = new Listing();
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
            header("Location: index.php?page=manage-listing");
            exit();
        }
    }

    
    
}
}

