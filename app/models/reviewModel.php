<?php 

require_once __DIR__ . '/../../config/database.php';

class ReviewModel{

    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connection();
    }
    public function addReview($userId, $rating, $description)
    {
        $query = "INSERT INTO review (UserId, StarRating, Description) VALUES (:user_id, :rating, :description)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':rating', $rating);
        $stmt->bindParam(':description', $description);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteReview($userId, $reviewId)
    {
        $query = "DELETE FROM review WHERE UserId = :user_id AND ReviewId = :review_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':review_id', $reviewId);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function returnAllReviews() {
        $query = "SELECT * FROM review";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function getUserReviews($userId)
    {
        $query = "SELECT * FROM review WHERE UserId = :user_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getReviews()
    {
        $query = "SELECT * FROM review";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}