<?php 

require_once __DIR__ . '/../../config/database.php';

class Listing{
    private $conn;

        public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connection();
    }

    public function createListing($title, $description, $areaSize, $bedrooms, $bathrooms, $propertyType, $listingType, $status, $userId, $addressLine01, $addressLine02, $city, $zipCode, $price, $imagePath)
    {
        $stmt = $this->conn->prepare("INSERT INTO propertylisting (
            Title, Description, AreaSize, Bedrooms, Bathrooms,
            PropertyType, ListingType, Status, UserId,
            AddressLine01, AddressLine02, City, ZipCode, Price, ImageInfo
        ) VALUES (
            :title, :description, :area_size, :bedrooms, :bathrooms,
            :property_type, :listing_type, :status, :user_id,
            :address_line01, :address_line02, :city, :zip_code, :price, :image_path
        )");

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':area_size', $areaSize);
        $stmt->bindParam(':bedrooms', $bedrooms);
        $stmt->bindParam(':bathrooms', $bathrooms);
        $stmt->bindParam(':property_type', $propertyType);
        $stmt->bindParam(':listing_type', $listingType);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':address_line01', $addressLine01);
        $stmt->bindParam(':address_line02', $addressLine02);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':zip_code', $zipCode);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image_path', $imagePath);

        return $stmt->execute();
    }

    public function top6forsale()
    {
        $stmt = $this->conn->prepare("
            SELECT ListingId, Title, AddressLine01, AddressLine02, City, ImageInfo, Bedrooms, Bathrooms, AreaSize, Price 
            FROM propertylisting 
            Where ListingType = 'Selling'
            ORDER BY RAND() 
            LIMIT 6
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        public function top6forrent()
    {
        $stmt = $this->conn->prepare("
            SELECT ListingId, Title, AddressLine01, AddressLine02, City, ImageInfo, Bedrooms, Bathrooms, AreaSize, Price 
            FROM propertylisting 
            Where ListingType = 'renting'
            ORDER BY RAND() 
            LIMIT 6
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



}