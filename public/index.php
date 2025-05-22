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

        require '../app/controllers/logincontroller.php';
        $loginController = new loginController();
        $loginController->checkSessionTimeout();
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
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $controller->managelisting();
        break;
    case 'add-listing':
        require '../app/views/createlisting.php';
        break;
    case 'create-listing':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $result = $controller->createListing();
        break;
    case 'viewlisting':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $controller->viewListing();
        break;
    case 'forsale':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $controller->viewforsalepage();
        break;
    case 'forrent':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $controller->viewforrentpage();
        break;
    case 'delete-listing':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $controller->deleteListing();
        break;
    case 'edit-listing':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $controller->loadeditlisting();
        break;
    case 'update-listing':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $result = $controller->updatelisting();
        break;
    case 'adminpanel':
        require '../app/controllers/adminpanelController.php';
        $controller = new apController();
        $controller->loadAdminPanel();
        break;
    case 'test':
        require '../app/views/test.php';
        break;
    case 'addreview':
        if(isset($_SESSION['user_id'])) {
            require '../app/views/addreview.php';
            break;
        }
        else {
            require '../app/views/login.php';
            break;
        }
    case 'savereview':
        require '../app/controllers/reviewController.php';
        $controller = new reviewController();
        $controller->addReview();
        break;
    case 'search-sell':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $result = $controller->sellsearch();
        break;
    case 'search-rent':
        require '../app/controllers/listingController.php';
        $controller = new listingController();
        $result = $controller->rentsearch();
        break;
    default:
        require '../app/views/404.php';
        break;

}
?>