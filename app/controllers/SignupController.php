<?php

require_once __DIR__ . '/../models/userModel.php';

class SignupController {

    public function load() {
        require_once __DIR__ . '/../views/signup.php';
    }

    public function signup(){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['contactnumber'];
        $userRole = $_POST['UserRole'] ?? 'user'; 


        if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($phone)) {
            echo "All fields are required.";
            return false;
        }

        $userModel = new UserModel();

        if ($userModel->checkEmailExists($email)) {
            echo "Email already exists.";
            return false;
        }
        $userModel->createUser($firstName, $lastName, $email, $password, $phone, $userRole);

        if(isset($_POST['authLevel'])) {
            header("Location: /ceylonestatefinal/public/adminpanel/load/users/admin");
        }
        else{
            require_once __DIR__ . '/../views/registration_successfull.php';
        }  
    }
    }

}