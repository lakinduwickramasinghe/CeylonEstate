<?php

require_once __DIR__ . '/../models/listingModel.php';

class ForrentController {

    public function load() {
        $ListingModel = new ListingModel();
        $forsale = $ListingModel->getAllForRentListings();
        require_once __DIR__ . '/../views/forrent.php';
    }
}