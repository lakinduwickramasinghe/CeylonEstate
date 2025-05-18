<?php

session_start();

$page = $_GET['page'] ?? 'home'; 

switch($page){
    case 'login':
        require '../app/views/login.php';
        break;

    case 'home':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $controller->loadHomePage();
        break;
    case 'login-controller':
        require '../app/controllers/loginController.php';
        $controller = new loginController();
        $result = $controller->loginUser();
        break;
    case 'signup':
        require '../app/views/signup.php';
        break;
    case 'signup-controller':
        require __DIR__ . '/../app/controllers/userController.php';
        $controller = new userController();
        $result = $controller->registerUser();
        break;
    case 'logout-controller':
        require '../app/controllers/loginController.php';
        $controller = new loginController();
        $controller->logoutUser();
        break;
    case 'user-profile':
        require '../app/controllers/userController.php';
        $controller = new userController();
        $controller->loadUpdateUserForm();

        break;
    case 'user-profile-update':
        require '../app/controllers/userController.php';
        $controller = new userController();
        $result = $controller->updateUserProfile();
        break;
    case 'reg-success':
        require '../app/views/registration_successfull.php';
        break;
    case 'aboutus':
        require '../app/views/aboutus.php';
        break;
    case 'manage-listing':
        require '../app/views/user_managelisting.php';
        break;
    default:
    case 'add-listing':
        require '../app/views/createlisting.php';
        break;
    case 'create-listing':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $result = $controller->createListing();
        break;
    case 'viewlisting':
        $id = $_GET['id'] ?? null;
        require '../app/views/viewlisting.php';
        break;

}
?>