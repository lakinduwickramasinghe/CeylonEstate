<?php 

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/userModel.php';

class userController
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connection();
    }

    public function isLoggedin(){
        if(empty($_SESSION['user_id']) || empty($_SESSION['user_email'])) {
            return true;
        }
        else {
            return false;
        }
    }

    public function registerUser()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['contactnumber'];
        $userRole = $_POST['user_role'] ?? 'user'; 


        if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($phone)) {
            echo "All fields are required.";
            return false;
        }

        $userModel = new User();

        if ($userModel->checkEmailExists($email)) {
            echo "Email already exists.";
            return false;
        }
        $userModel->createUser($firstName, $lastName, $email, $password, $phone, $userRole);

        header("Location: http://localhost/ceylonestatefinal/public/index.php?page=reg-success");
        
    }
}
    public function updateUserProfile()
    {
        $userId = $_SESSION['user_id'];
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $contactNumber = $_POST['contactnumber'];

        
        if (empty($firstName) || empty($lastName) || empty($email) || empty($contactNumber)) {
            return false;
        }
        $userModel = new User();

        $status = $userModel->updateUserProfile($userId,$firstName,$lastName,$email,$contactNumber);
        if($status) {
            $_SESSION['user_id'] = $userId;
            $_SESSION['user_email'] = $email;

            header("Location: http://localhost/ceylonestatefinal/public/index.php?page=user-profile");
            exit();
        } else {
            echo "Failed to update profile.";
        }
        
    }
    
    public function loadUpdateUserForm()
    {
        $result = $this->isLoggedin();
        if($result =='false') {
            header("Location: http://localhost/ceylonestatefinal/public/index.php?page=login");
            exit();
        }
        $userId = $_SESSION['user_id'];
        $userModel = new User();
        $user = $userModel->getUserProfile($userId);
        require_once __DIR__ . '/../views/updateprofile.php';
    }


}