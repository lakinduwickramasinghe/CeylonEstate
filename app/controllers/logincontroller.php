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

    public function loginUser()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                echo "All fields are required.";
                return false;
            }
            

            $stmt = $this->conn->prepare("SELECT * FROM mpuser WHERE Email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_verify($password, $user['Password'])) {
                    $_SESSION['user_id'] = $user['UserId'];
                    $_SESSION['user_role'] = $user['UserRole'];
                    $_SESSION['user_email'] = $user['Email'];
                    $_SESSION['last_activity'] = time();

                    header("Location: index.php?page=home");
                    
                    
                    return true;
                } else {
                    echo "Invalid password.";
                    return false;
                }
            } else {
                echo "No user found with that email.";
                return false;
            }
        }
    }
    public function logoutUser()
    {
        session_destroy();
        header("Location: index.php?page=home");
    }
}