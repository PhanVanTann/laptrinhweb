<?php
include "../config/database.php";

class StatusUpdater {
    private $db;

    public function __construct() {
        $this->db = new Database(); // Khởi tạo đối tượng Database
    }

    public function updateOrderStatus($order_id) {
        if (empty($order_id) || !is_numeric($order_id)) {
            die("Order ID is missing or invalid.");
        }

        // Cập nhật trạng thái đơn hàng thành 'Đã Giao'
        $query = "UPDATE tbl_order SET status = 'Đã Giao' WHERE order_id = ?";
        $this->db->update($query, [$order_id], "i");

        // Chuyển hướng về trang danh sách đơn hàng
        header("Location: ../admin/listpayment.php");
        exit();
    }
}

// Khởi tạo đối tượng StatusUpdater và cập nhật trạng thái
$updater = new StatusUpdater();
$order_id = $_GET['order_id'] ?? null;

if ($order_id) {
    $updater->updateOrderStatus($order_id);
} else {
    echo "Order ID is missing or invalid.";
}
?>
