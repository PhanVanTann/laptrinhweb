<?php include "../includes/header.php";
include "slider.php";

$admin = new Admin();
$orders = $admin->getAllOrders(); 

?>
<div class="admin_right">
    <div class="order-details-container">
        <h2>Danh Sách Đơn Hàng</h2>

        <!-- Bảng thông tin đơn hàng -->
        <div id="order-info">
            <h3>Thông Tin Đơn Hàng</h3>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID Đơn Hàng</th>
                        <th>Tên Người Đặt</th>
                        <th>Địa Chỉ Nhận Hàng</th>
                        <th>Phương Thức Thanh Toán</th>
                        <th>Thời Gian Đặt Hàng</th>
                        <th>Chi Tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($order = $orders->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $order['order_id']; ?></td>
                        <td><?php echo htmlspecialchars($order['user_name']); ?></td>
                        <td><?php echo htmlspecialchars($order['delivery_address']); ?></td>
                        <td><?php echo htmlspecialchars($order['method_payment']); ?></td>
                        <td><?php echo htmlspecialchars($order['created_at']); ?></td>
                        <td>
                            <a href="listpayment.php?order_id=<?php echo $order['order_id']; ?>">Xem Chi Tiết</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- Chi tiết sản phẩm -->
        <?php if (isset($_GET['order_id'])): ?>
        <div id="product-details">
            <h3>Chi Tiết Sản Phẩm</h3>
            <?php
            $order_id = $_GET['order_id'];
            $order_details = $admin->getOrderDetails($order_id);

            if ($order_details->num_rows > 0):
            ?>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá Tiền</th>
                        <th>Thành Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total_price = 0;
                    while ($item = $order_details->fetch_assoc()):
                        $item_total = $item['product_price'] * $item['product_quanlity'];
                        $total_price += $item_total;
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                        <td><?php echo htmlspecialchars($item['product_quanlity']); ?></td>
                        <td><?php echo number_format($item['product_price'], 0, ',', '.'); ?> đ</td>
                        <td><?php echo number_format($item_total, 0, ',', '.'); ?> đ</td>
                    </tr>
                    <?php endwhile; ?>
                    <!-- Dòng tổng tiền -->
                    <tr>
                        <td colspan="3"><strong>Tổng Tiền</strong></td>
                        <td><strong><?php echo number_format($total_price, 0, ',', '.'); ?> đ</strong></td>
                    </tr>
                </tbody>
            </table>
            <?php else: ?>
            <p>Không có chi tiết đơn hàng.</p>
            <?php endif; ?>
            <a href="listpayment.php">Quay Lại</a>
        </div>
        <?php endif; ?>
    </div>
</div>

    <script>
        function showDetails() {
            document.getElementById('order-info').classList.add('hidden');
            document.getElementById('product-details').classList.remove('hidden');
        }

        function showInfo() {
            document.getElementById('order-info').classList.remove('hidden');
            document.getElementById('product-details').classList.add('hidden');
        }
    </script>
</div>

</section>
    <section class="icons-conta"></section>
    <?php include "../includes/footer.php" ?>