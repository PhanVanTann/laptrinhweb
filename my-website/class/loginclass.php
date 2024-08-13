<?php
include "../config/database.php";

class Login {
    private $db;

    public function __construct() {
        $this->db = new Database(); // Khởi tạo kết nối cơ sở dữ liệu
    }

    public function authenticate($email, $passwords) {
        // Lấy thông tin người dùng từ cơ sở dữ liệu
        $query = "SELECT passwords FROM tbl_register WHERE email = ?";
        $result = $this->db->select($query, [$email], "s");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['passwords'];

            // So sánh mật khẩu đã nhập với mật khẩu lưu trữ
            if ($passwords === $storedPassword) {
                echo 'success'; // Đăng nhập thành công
            } else {
                echo 'Thông tin đăng nhập không chính xác'; // Sai mật khẩu
            }
        } else {
            echo 'Thông tin đăng nhập không chính xác'; // Email không tồn tại
        }
    }
}

// Xử lý yêu cầu POST từ form đăng nhập
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $passwords = $_POST['passwords'];

    $login = new Login();
    $login->authenticate($email, $passwords);
}
?>
