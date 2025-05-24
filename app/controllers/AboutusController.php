<?php
require_once __DIR__ . '/../controllers/reviewController.php';

class AboutusController
{
    public function load()
    {
        
        $reviewController = new ReviewController();
        $reviews = $reviewController->loadReviewsAtAboutus();
        require_once __DIR__ . '/../views/aboutus.php';
    }
}