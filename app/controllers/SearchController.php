<?php 
require_once __DIR__ . '/../models/listingModel.php';
require_once __DIR__ . '/../models/userModel.php';
require_once __DIR__ . '/../controllers/userController.php';

class SearchController{

    public function load(){

    }
    public function forsale(){
        $minprice = $_GET['min-price'] ?? 0;

        $maxprice = $_GET['max-price'] ?? 1000000000;
        $keyword = $_GET['keyword'] ?? '';
        $propertyType = $_GET['property-type'] ?? '';


        $listingModel = new ListingModel();
        $searchResult = $listingModel->searchforsalelisting($propertyType, $minprice, $maxprice, $keyword);
        require_once __DIR__ . '/../views/sellsearch.php';
    }
    public function forrent(){
        $minprice = $_GET['min-price'] ?? 0;

        $maxprice = $_GET['max-price'] ?? 1000000000;
        $keyword = $_GET['keyword'] ?? '';
        $propertyType = $_GET['property-type'] ?? '';


        $listingModel = new ListingModel();
        $searchResult = $listingModel->searchforrentlisting($propertyType, $minprice, $maxprice, $keyword);
        require_once __DIR__ . '/../views/rentsearch.php';
    }
}