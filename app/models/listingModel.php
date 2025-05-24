<?php 

require_once __DIR__ . '/../../config/database.php';

class ListingModel{
    private $conn;

        public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connection();
    }

    public function getPropertyValuation()
    {
        $stmt = $this->conn->prepare("SELECT SUM(Price) as total_valuation FROM propertylisting WHERE ListingType = 'Selling'");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function searchforrentlisting($type, $minprice, $maxprice, $keyword) {
        $query = "
            SELECT ListingId, Title, AddressLine01, AddressLine02, City, ImageInfo, Bedrooms, Bathrooms, AreaSize, Price, ListingType 
            FROM propertylisting 
            WHERE ListingType = 'Renting'
        ";

        $conditions = [];
        $params = [];

        if (!empty($type)) {
            $conditions[] = "PropertyType = :type";
            $params[':type'] = $type;
        }

        if (!empty($minprice)) {
            $conditions[] = "Price >= :minprice";
            $params[':minprice'] = $minprice;
        }

        if (!empty($maxprice)) {
            $conditions[] = "Price <= :maxprice";
            $params[':maxprice'] = $maxprice;
        }

        if (!empty($keyword)) {
            $conditions[] = "(Title LIKE :keyword OR AddressLine01 LIKE :keyword OR City LIKE :keyword)";
            $params[':keyword'] = '%' . $keyword . '%';
        }

        if (count($conditions) > 0) {
            $query .= " AND " . implode(' AND ', $conditions);
        }

        $query .= " ORDER BY RAND()";

        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchforsalelisting($type, $minprice, $maxprice, $keyword) {
        $query = "
            SELECT ListingId, Title, AddressLine01, AddressLine02, City, ImageInfo, Bedrooms, Bathrooms, AreaSize, Price, ListingType 
            FROM propertylisting 
            WHERE ListingType = 'Selling'
        ";

        $conditions = [];
        $params = [];

        if (!empty($type)) {
            $conditions[] = "PropertyType = :type";
            $params[':type'] = $type;
        }

        if (!empty($minprice)) {
            $conditions[] = "Price >= :minprice";
            $params[':minprice'] = $minprice;
        }

        if (!empty($maxprice)) {
            $conditions[] = "Price <= :maxprice";
            $params[':maxprice'] = $maxprice;
        }

        if (!empty($keyword)) {
            $conditions[] = "(Title LIKE :keyword OR AddressLine01 LIKE :keyword OR City LIKE :keyword)";
            $params[':keyword'] = '%' . $keyword . '%';
        }

        if (count($conditions) > 0) {
            $query .= " AND " . implode(' AND ', $conditions);
        }

        $query .= " ORDER BY RAND()";

        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function createListing($title, $description, $areaSize, $bedrooms, $bathrooms, $propertyType, $listingType, $status, $userId, $addressLine01, $addressLine02, $city, $zipCode, $price, $ImageInfo)
    {
        $stmt = $this->conn->prepare("INSERT INTO propertylisting (
            Title, Description, AreaSize, Bedrooms, Bathrooms,
            PropertyType, ListingType, Status, UserId,
            AddressLine01, AddressLine02, City, ZipCode, Price, ImageInfo
        ) VALUES (
            :title, :description, :area_size, :bedrooms, :bathrooms,
            :property_type, :listing_type, :status, :user_id,
            :address_line01, :address_line02, :city, :zip_code, :price, :ImageInfo
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
        $stmt->bindParam(':ImageInfo', $ImageInfo);


        return $stmt->execute();
    }

    public function top6forsale()
    {
        $stmt = $this->conn->prepare("
            SELECT ListingId, Title, AddressLine01, AddressLine02, City, ImageInfo, Bedrooms, Bathrooms, AreaSize, Price, ListingType 
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
            SELECT ListingId, Title, AddressLine01, AddressLine02, City, ImageInfo, Bedrooms, Bathrooms, AreaSize, Price, ListingType
            FROM propertylisting 
            Where ListingType = 'renting'
            ORDER BY RAND() 
            LIMIT 6
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateListing($listingId, $title, $description, $areaSize, $bedrooms, $bathrooms, $propertyType, $listingType, $status, $addressLine01, $addressLine02, $city, $zipCode, $price)
{
    try {
        $stmt = $this->conn->prepare("UPDATE propertylisting SET 
            Title = :title,
            Description = :description,
            AreaSize = :area_size,
            Bedrooms = :bedrooms,
            Bathrooms = :bathrooms,
            PropertyType = :property_type,
            ListingType = :listing_type,
            Status = :status,
            AddressLine01 = :address_line01,
            AddressLine02 = :address_line02,
            City = :city,
            ZipCode = :zip_code,
            Price = :price
        WHERE ListingId = :listing_id");

        $stmt->bindParam(':listing_id', $listingId);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':area_size', $areaSize);
        $stmt->bindParam(':bedrooms', $bedrooms);
        $stmt->bindParam(':bathrooms', $bathrooms);
        $stmt->bindParam(':property_type', $propertyType);
        $stmt->bindParam(':listing_type', $listingType);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':address_line01', $addressLine01);
        $stmt->bindParam(':address_line02', $addressLine02);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':zip_code', $zipCode);
        $stmt->bindParam(':price', $price);
        
        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
        
    } catch (PDOException $e) {
        error_log("Error updating listing: " . $e->getMessage());
        return false;
    }
}


    public function getListingById($listingId)
    {
        $stmt = $this->conn->prepare("SELECT * FROM propertylisting WHERE ListingId = :listing_id");
        $stmt->bindParam(':listing_id', $listingId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }

    

    public function getAllForSaleListings()
    {
        $stmt = $this->conn->prepare("SELECT * FROM propertylisting WHERE ListingType = 'Selling'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

        public function getAllForRentListings()
    {
        $stmt = $this->conn->prepare("SELECT * FROM propertylisting WHERE ListingType = 'Renting'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllListingsByUserId($userId)
    {
        $stmt = $this->conn->prepare("SELECT * FROM propertylisting WHERE UserId = :user_id");
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteListing($listingId)
    {
        $stmt = $this->conn->prepare("DELETE FROM propertylisting WHERE ListingId = :listing_id");
        $stmt->bindParam(':listing_id', $listingId, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function returnlistingcount()
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) as count FROM propertylisting");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } 

    public function getAllListings()
    {
        $stmt = $this->conn->prepare("SELECT * FROM propertylisting ORDER BY RAND() LIMIT 6");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}