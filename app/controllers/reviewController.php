<?php

require_once __DIR__ . '/../models/reviewModel.php';
require_once __DIR__ . '/../models/userModel.php';

class ReviewController
{
    public function load(){
        $userModel = new UserModel();
        $result = $userModel->isloggedin();
        if($result =='false') {
            header("Location: /ceylonestatefinal/public/login");
            exit();
        }
        require_once __DIR__ . '/../views/addreview.php';
    }

    public function loadReviewsAtAboutus()
    {
        $reviewModel = new ReviewModel();
        $reviews = $reviewModel->getReviews();
        return $reviews;
    }

        public function getAllReviews()
    {
        $Listing = new ReviewModel();
        $reviews = $Listing->returnAllReviews();
        return $reviews;
    }

    public function loadUserReviews():void
    {
        $userId = $_SESSION['user_id'];
        $reviewModel = new ReviewModel();
        $reviews = $reviewModel->getUserReviews($userId);
        require_once __DIR__ . '/../views/myreviews.php';
    }

    public function delete($reviewId=null)
    {
        $reviewModel = new ReviewModel();
        $result = $reviewModel->deleteReview($reviewId);
        if ($result) {

        if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'Admin') {
            header('Location: /ceylonestatefinal/public/adminpanel/load/review');
            exit();
        }
        header('Location: /ceylonestatefinal/public/updateprofile/myreviews');
        exit();
        }
    }

    public function addReview()
    {
        $userId = $_SESSION['user_id'];
        $starRating = $_POST['rating'];
        $description = $_POST['description'];
        $reviewModel = new ReviewModel();
        $result = $reviewModel->addReview($userId,$starRating, $description);
        if ($result) {
            header('Location: /ceylonestatefinal/public/aboutus');
            exit();
        } else {
            echo "Error adding review.";
        }
    }
}