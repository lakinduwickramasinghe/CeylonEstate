<?php

require_once __DIR__ . '/../models/userModel.php';

class LoginController {

    public function load() {
        require_once __DIR__ . '/../views/login.php';
    }
    public function processLogin(){
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                echo "All fields are required.";
                return false;
            }
            $userModel = new UserModel();
            $result = $userModel->loginValidation($email, $password);
            if ($result) {
                header("Location: /ceylonestatefinal/public/");
                exit();
            } else {
                echo "Invalid email or password.";
                header("/ceylonestatefinal/public/login");
            }
        }
    } 
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /ceylonestatefinal/public");
        exit();
    }
}