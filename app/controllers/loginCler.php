<?php 

require_once '../config/database.php';

class loginController{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connection();
    }

function checkSessionTimeout($timeout_duration = 7200) //2 hours
{
    if (isset($_SESSION['last_activity'])) {
        if ((time() - $_SESSION['last_activity']) > $timeout_duration) {
            session_unset();
            session_destroy();
            header("Location: index.php?page=login&timeout=1");
            exit();
        } else {
            $_SESSION['last_activity'] = time();
        }
    } else {
        header("Location: index.php?page=login");
        exit();
    }
}
    public function roleValidate(){
        if (!isset($_SESSION['user_role'])) {
            echo "Session not set";
            exit();
            header("Location: index.php?page=login");
        }
            if ($_SESSION['user_role'] != 'Admin' & $_SESSION['user_role'] != 'Seller') {
                echo "Access denied";
                echo $_SESSION['user_role'];    
                exit();
                header("Location: index.php?page=login");
            }

    }

}