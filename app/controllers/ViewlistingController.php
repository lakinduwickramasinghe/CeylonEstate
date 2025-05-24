<?php

require_once __DIR__ . '/../models/listingModel.php';

class ViewlistingController {

    public function load($id) {
        $ListingModel = new ListingModel();
        $listing = $ListingModel->getListingById($id);
        require_once __DIR__ . '/../views/viewlisting.php';
    }
}