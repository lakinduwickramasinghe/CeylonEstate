<?php

require_once __DIR__ . '/../models/listingModel.php';

class ForsaleController {

    public function load() {
        $ListingModel = new ListingModel();
        $forsale = $ListingModel->getAllForSaleListings();
        require_once __DIR__ . '/../views/forsale.php';
    }
}