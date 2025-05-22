<?php 

class User{
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $contactNumber;
    private $address;
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connection();
    }

    public function checkEmailExists($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM mpuser WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function createUser($firstName, $lastName, $email, $password, $contactNumber, $UserRole)
    {

        $role = $UserRole ?? 'user';
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Prepare the SQL statement
        $stmt = $this->conn->prepare("INSERT INTO mpuser (FirstName, LastName, Email, Password, ContactNumber, UserRole) VALUES (:first_name, :last_name, :email, :password, :contact_number, :user_role)");

        // Bind parameters
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':contact_number', $contactNumber);
        $stmt->bindParam(':user_role', $UserRole);

        // Execute the statement
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getUserProfile($userId)
    {
        // Prepare the SQL statement
        $stmt = $this->conn->prepare("SELECT * FROM mpuser WHERE UserID = :user_id");

        // Bind parameters
        $stmt->bindParam(':user_id', $userId);

        // Execute the statement
        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public function updateUserProfile($userId, $firstName, $lastName, $email, $contactNumber)
    {

        // Prepare the SQL statement
        $stmt = $this->conn->prepare("UPDATE mpuser SET FirstName = :first_name, LastName = :last_name, Email = :email, ContactNumber = :contact_number WHERE UserID = :user_id");

        // Bind parameters
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contact_number', $contactNumber);
        $stmt->bindParam(':user_id', $userId);

        // Execute the statement
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
        public function returnusercount()
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) as count FROM mpuser");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllUsers()
    {
        $stmt = $this->conn->prepare("SELECT * FROM mpuser");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getGivenTabke($userRole)
    {
        $stmt = $this->conn->prepare("SELECT * FROM mpuser WHERE UserRole = :user_role");
        $stmt->bindParam(':user_role', $userRole);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

?>