<?php
include "../config/database.php";


class Login {
    private $db;

    public function __construct() {
        $this->db = new Database(); // Khởi tạo kết nối cơ sở dữ liệu
    }
    public function restore_cart($user_id) {
        $query = "SELECT * FROM tbl_cart WHERE user_id = ?";
        $cart_items = $this->db->select($query, [$user_id], "i");
    
        // Lưu thông tin giỏ hàng vào session
        $_SESSION['cart_items'] = $cart_items->fetch_all(MYSQLI_ASSOC);
    }
    
    

    public function authenticate($email, $passwords) {
        // Lấy thông tin người dùng từ cơ sở dữ liệu
        $query = "SELECT passwords,roles ,user_id,fullname FROM tbl_register WHERE email = ?";
        $result = $this->db->select($query, [$email], "s");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['passwords'];
            $userRole = $row['roles'];
            $userId = $row['user_id'];
            

            // So sánh mật khẩu đã nhập với mật khẩu lưu trữ
            if ($passwords === $storedPassword) {
                session_start();
                $_SESSION['roles'] = $userRole;
                $_SESSION['user_id'] = $userId;
                $_SESSION['fullname'] = $row['fullname']; 
                
                if (isset($_SESSION['user_id'])) {
                    $query = "SELECT * FROM tbl_cart WHERE user_id = ?";
                    $cart_items = $this->db->select($query, [$_SESSION['user_id']], "i");
                    
                    // Xử lý dữ liệu giỏ hàng ở đây (ví dụ: lưu vào session hoặc hiển thị ra màn hình)
                    // Nếu cần lưu dữ liệu giỏ hàng vào session:
                    $_SESSION['cart_items'] = $cart_items->fetch_all(MYSQLI_ASSOC);
                }
                $this->restore_cart($userId);
               
                
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
