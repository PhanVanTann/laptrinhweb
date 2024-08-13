<?php 
include "../config/database.php";


class Register {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    private function emailExists($email) {
        $query = "SELECT COUNT(*) as count FROM tbl_register WHERE email = ?";
        $params = [$email];
        $types = "s";

        $result = $this->db->select($query, $params, $types);

        // Lấy dữ liệu từ đối tượng mysqli_result
        $row = $result->fetch_assoc(); // fetch_assoc() để lấy dữ liệu dưới dạng mảng kết hợp
        return $row['count'] > 0;
    }

    private function phoneExists($phone) {
        $query = "SELECT COUNT(*) as count FROM tbl_register WHERE phone = ?";
        $params = [$phone];
        $types = "s";

        $result = $this->db->select($query, $params, $types);

        // Lấy dữ liệu từ đối tượng mysqli_result
        $row = $result->fetch_assoc(); // fetch_assoc() để lấy dữ liệu dưới dạng mảng kết hợp
        return $row['count'] > 0;
    }

    public function insert_register($postData) {
        $fullname = $postData['fullname'];
        $email = $postData['email'];
        $deliveryaddress = $postData['deliveryaddress'];
        $phone = $postData['phone'];
        $passwords = $postData['passwords'];   

        // Kiểm tra xem email và số điện thoại đã tồn tại chưa
        if ($this->emailExists($email)) {
            return "Email đã tồn tại.";
        }

        if ($this->phoneExists($phone)) {
            return "Số điện thoại đã tồn tại.";
        }

        // Nếu không tồn tại thì thực hiện chèn dữ liệu mới
        $query = "INSERT INTO tbl_register (
            fullname,
            email,
            deliveryaddress,
            phone,
            passwords
        ) VALUES (?, ?, ?, ?,?)";
        
        $params = [$fullname, $email,$deliveryaddress, $phone, $passwords];
        $types = "sssss"; // s: string (tất cả các tham số đều là chuỗi)

        $this->db->insert($query, $params, $types);

        return "Đăng ký thành công!";
       
    }
}


?>
