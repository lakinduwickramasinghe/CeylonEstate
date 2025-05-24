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
        $userModel = new UserModel();

        $status = $userModel->updateUserProfile($userId,$firstName,$lastName,$email,$contactNumber);
        if($status) {
            $_SESSION['user_id'] = $userId;
            $_SESSION['user_email'] = $email;
            if(isset($_POST['authLevel'])) {
                header("Location: index.php?page=adminpanel&view=users&table=admin");
            }
            else{
                header("Location: index.php?page=user-profile");
            }
            
            exit();
        } else {
            echo "Failed to update profile.";
        }   
    }
    
    public function loadUpdateUserForm()
    {
        $result = $this->isLoggedin();
        if($result =='false') {
            header("Location: index.php?page=login");
            exit();
        }
        $userId = $_SESSION['user_id'];
        $userModel = new UserModel();
        $user = $userModel->getUserProfile($userId);
        require_once __DIR__ . '/../views/updateprofile.php';
    }

    public function returnUsersOnRole($role)
    {
        $userModel = new UserModel();
        $users = $userModel->getGivenTabke($role);
        return $users;
    }


}