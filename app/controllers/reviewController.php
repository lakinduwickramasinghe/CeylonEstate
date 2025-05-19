<?php

require_once __DIR__ . '/../models/reviewModel.php';

class ReviewController
{

    public function __construct()
    {
    }

    public function loadReviewPage()
    {
        $reviewModel = new ReviewModel();
        $reviews = $reviewModel->getReviews();
        require_once __DIR__ . '/../views/reviewsection.php';
    }

    public function addReview()
    {
        $userId = $_SESSION['user_id'];
        $starRating = $_POST['rating'];
        $description = $_POST['description'];
        $reviewModel = new ReviewModel();
        $result = $reviewModel->addReview($userId,$starRating, $description);
        if ($result) {
            // Redirect to the reviews page or show a success message
            header('Location: http://localhost/ceylonestatefinal/public/index.php?page=aboutus');
            exit();
        } else {
            // Handle error (e.g., show an error message)
            echo "Error adding review.";
        }
    }
}