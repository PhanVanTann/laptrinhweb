<?php
include "../config/database.php";

class PaymentProcessor {
    private $db;

    public function __construct() {
        $this->db = new Database(); // Khởi tạo đối tượng Database
    }

    public function processPayment($user_id, $payment_method) {
        // Kiểm tra giá trị của user_id
        if (empty($user_id) || !is_numeric($user_id)) {
            die("User ID is missing or invalid.");
        }

        // Lấy thông tin giỏ hàng từ user_id
        $cart_items = $this->get_cart_items_by_user_id($user_id);

        // Nếu không có sản phẩm trong giỏ hàng, thoát
        if ($cart_items->num_rows == 0) {
            die("No items found in the cart.");
        }

        // Lấy thông tin người dùng
        $user_profile = $this->show_profileincart($user_id);

        if ($user_profile === null) {
            die("User profile not found.");
        }

        $user_name = $user_profile['fullname'];
        $delivery_address = $user_profile['deliveryaddress'];

        // Thêm đơn hàng vào bảng tbl_order
        $query = "INSERT INTO tbl_order (
            user_id,
            user_name,
            delivery_address,
            created_at,
            method_payment
        ) VALUES (?, ?, ?, NOW(), ?)";

        $params = [
            $user_id,
            $user_name,
            $delivery_address,
            $payment_method
        ];

        $types = "isss";
        $this->db->insert($query, $params, $types);

        // Lấy ID của đơn hàng vừa thêm
        $order_id = $this->db->getInsertId();

        // Lưu thông tin sản phẩm vào bảng productdesc_id
        while ($item = $cart_items->fetch_assoc()) {
            $item_total = $item['product_price'] * $item['product_quanlity'];

            $query = "INSERT INTO tbl_productdesc (
                order_id,
                cart_id,
                product_name,
                sum_price,
                product_quanlity,
                product_price
            ) VALUES (?, ?, ?, ?, ?, ?)";

            $params = [
                $order_id,
                $item['cart_id'],
                $item['product_name'],
                $item_total,
                $item['product_quanlity'],
                $item['product_price']
            ];

            $types = "iisdid";
            $this->db->insert($query, $params, $types);
        }

        // Xóa các sản phẩm khỏi giỏ hàng
        $query = "DELETE FROM tbl_cart WHERE user_id = ?";
        $this->db->delete($query, [$user_id], "i");

        // Chuyển hướng đến trang category
        header("Location: ../pages/cartegory.php");
        exit();
    }

    public function get_cart_items_by_user_id($user_id) {
        $query = "SELECT cart_id, product_id, product_name, product_quanlity, product_price FROM tbl_cart WHERE user_id = ?";
        $result = $this->db->select($query, [$user_id], "i");

        if ($result && $result->num_rows > 0) {
            return $result;
        } else {
            return [];
        }
    }

    public function show_profileincart($user_id) {
        $query = "SELECT fullname, phone, deliveryaddress FROM tbl_register WHERE user_id = ?";
        $result = $this->db->select($query, [$user_id], "i");

        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
}

// Khởi tạo đối tượng PaymentProcessor và xử lý thanh toán
$processor = new PaymentProcessor();
$user_id = $_POST['user_id'] ?? null;
$payment_method = $_POST['payment_method'] ?? 'Thanh Toán Khi Nhận Hàng';

if ($user_id) {
    $processor->processPayment($user_id, $payment_method);
} else {
    echo "User ID is missing or invalid.";
}
?>
