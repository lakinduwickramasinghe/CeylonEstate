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
                session_start();

                if (isset($_SESSION['last_activity'])) {
                    if ((time() - $_SESSION['last_activity']) > $timeout_duration) {
                        session_unset();
                        session_destroy();

                        header("Location: http://localhost/ceylonestatefinal/public/index.php?page=login&timeout=1");
                        exit();
                    } else {
                        $_SESSION['last_activity'] = time();
                    }
                } else {
                    header("Location: http://localhost/ceylonestatefinal/public/index.php?page=login");
                    exit();
                }
                echo $_SESSION['last_activity'];
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
            

            // Prepare the SQL statement
            $stmt = $this->conn->prepare("SELECT * FROM mpuser WHERE Email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_verify($password, $user['Password'])) {
                    // Password is correct, set session variables
                    $_SESSION['user_id'] = $user['UserId'];
                    $_SESSION['user_role'] = $user['UserRole'];
                    $_SESSION['user_email'] = $user['Email'];
                    $_SESSION['last_activity'] = time();

                    header("Location: http://localhost/ceylonestatefinal/public/index.php?page=home");
                    
                    
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
        header("Location: http://localhost/ceylonestatefinal/public/index.php?page=home");
    }
}