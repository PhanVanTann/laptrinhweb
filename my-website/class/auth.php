<?php


class Auth {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function checkToken() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_COOKIE['token'])) {
            $token = $_COOKIE['token'];

            // Tìm người dùng dựa trên token
            $query = "SELECT user_id, roles, fullname FROM tbl_register WHERE token = ?";
            $result = $this->db->select($query, [$token], "s");

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['roles'] = $row['roles'];
                $_SESSION['fullname'] = $row['fullname'];
                return true;
            } else {
                
                return false;
            }
        } else {
           
            return false;
        }
    }

    
}
?>
