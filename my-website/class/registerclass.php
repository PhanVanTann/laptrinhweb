<?php 
include "../config/database.php";

class Register {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function insert_register() {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $passwords = $_POST['passwords'];   

        $query = "INSERT INTO tbl_register (
            fullname,
            email,
            phone,
            passwords
        ) VALUES (?, ?, ?, ?)";
        
        $params = [$fullname, $email, $phone, $passwords];
        $types = "ssss"; // s: string (tất cả các tham số đều là chuỗi)

        $this->db->insert($query, $params, $types);
    }
}
?>
