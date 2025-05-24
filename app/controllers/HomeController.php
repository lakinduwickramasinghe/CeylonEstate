<?php

require_once __DIR__ . '/../models/listingModel.php';

class HomeController
{
    public function load()
    {
        $ListingModel = new ListingModel();
        $forsale = $ListingModel->top6forsale();
        $forrent = $ListingModel->top6forrent();
        require_once __DIR__ . '/../views/home.php';
    
    }
    public function denyaccess(){
        require_once __DIR__ . '/../views/denyaccess.php';
    }
}