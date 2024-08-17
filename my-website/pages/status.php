<?php
include "../includes/header.php";
include "../config/database.php";

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$db = new Database();

// Lấy danh sách đơn hàng của người dùng
$query = "SELECT order_id, user_name, delivery_address, created_at, status FROM tbl_order WHERE user_id = ?";
$result = $db->select($query, [$user_id], "i");

?>
<section class="icons-conta"></section>

<section class="order-section">
    <h2>Đơn Hàng Của Bạn</h2>
    <table class="order-table">
        <thead>
            <tr>
                <th>ID Đơn Hàng</th>
                <th>Tên Người Đặt</th>
                <th>Địa Chỉ Nhận Hàng</th>
                <th>Thời Gian Đặt Hàng</th>
                <th>Trạng Thái</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($order = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($order['order_id']); ?></td>
                <td><?php echo htmlspecialchars($order['user_name']); ?></td>
                <td><?php echo htmlspecialchars($order['delivery_address']); ?></td>
                <td><?php echo htmlspecialchars($order['created_at']); ?></td>
                <td><?php echo htmlspecialchars($order['status']); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

<?php include "../includes/footer.php"; ?>
