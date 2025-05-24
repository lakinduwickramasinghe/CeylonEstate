<?php 
require_once __DIR__ . '/../models/listingModel.php';

class listingController
{

    public function loadeditlisting()
    {

    }


    public function deleteListing()
    {

    }
    
    public function viewListing()
    {
        $Listing = new ListingModel();
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

        $listingModel = new ListingModel();
        $searchResult = $listingModel->searchforsalelisting($type,$minprice,$maxprice,$keyword);
        require_once __DIR__ . '/../views/sellsearch.php';
    }

        public function rentsearch(){
        $type = $_GET['property-type'] ?? null;
        $minprice = $_GET['min-price'];
        $maxprice = $_GET['max-price'];
        $keyword = $_GET['keyword'];

        $listingModel = new ListingModel();
        $searchResult = $listingModel->searchforrentlisting($type,$minprice,$maxprice,$keyword);
        require_once __DIR__ . '/../views/rentsearch.php';
    }


} 



