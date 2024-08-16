<?php
include "../includes/header.php";
include "../class/adminclass.php";?>
<section class="icons-conta"> </section>
<?php 
$user_id = $_SESSION['user_id'];
$admin = new admin();
$user_info = $admin->show_profileincart($user_id);

$admin = new admin();
$user_id = $_POST['user_id'] ?? null;

if (!$user_id) {
    echo "User ID is missing or invalid.";
    exit();
}

$admin = new admin();
$cart_items = $admin->get_cart_items_by_user_id($user_id);

if ($cart_items->num_rows == 0) {
    echo "Giỏ hàng của bạn hiện tại không có sản phẩm nào.";
    exit();
}

// Tính tổng giá tiền
$total_price = 0;
?>


<div class="payment-container">
    <h2>Thông Tin Thanh Toán</h2>
    <form action="process_payment.php" method="post">
        <div class="payment-form-group">
            <label for="name">Họ và Tên:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user_info['fullname']); ?>" readonly>
        </div>

        <div class="payment-form-group">
            <label for="phone">Số Điện Thoại:</label>
            <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($user_info['phone']); ?>" readonly>
        </div>
        <div class="payment-form-group">
            <label for="address">Địa Chỉ:</label>
            <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($user_info['deliveryaddress']); ?>" readonly>
        </div>

        <h3>Thông Tin Đơn Hàng</h3>
        <table class="payment-table">
            <thead>
                <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Giá Tiền</th>
                    <th>Thành Tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($item = $cart_items->fetch_assoc()): 
                    $item_total = $item['product_price'] * $item['product_quanlity'];
                    $total_price += $item_total;
                ?>
                <tr>
                    <td class="td1">
                        <input type="text" name="products[<?php echo $item['product_id']; ?>][name]" value="<?php echo htmlspecialchars($item['product_name']); ?>" readonly>
                    </td>
                    <td>
                        <input type="text" name="products[<?php echo $item['product_id']; ?>][quantity]" value="<?php echo htmlspecialchars($item['product_quanlity']); ?>" min="1" required>
                    </td>
                    <td>
                        <input type="text" name="products[<?php echo $item['product_id']; ?>][price]" value="<?php echo number_format($item['product_price'], 0, ',', '.'); ?> đ" readonly>
                    </td>
                    <td>
                        <input type="text" name="products[<?php echo $item['product_id']; ?>][total]" value="<?php echo number_format($item_total, 0, ',', '.'); ?> đ" readonly>
                    </td>
                </tr>
                <?php endwhile; ?>
                <!-- Dòng tổng tiền -->
                <tr>
                    <td colspan="3"><strong>Tổng Tiền</strong></td>
                    <td>
                        <input type="text" name="total_price" value="<?php echo number_format($total_price, 0, ',', '.'); ?> đ" readonly>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="payment-form-group">
            <label for="payment_method">Phương Thức Thanh Toán:</label>
            <input type="text" id="payment_method" name="payment_method" value="Thanh Toán Khi Nhận Hàng" readonly>
        </div>

        <!-- Input ẩn để gửi user_id -->
        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user_id); ?>" readonly>

        <button type="submit" class="payment-btn">Xác Nhận Đơn Hàng</button>
    </form>
</div>
</section>
<section class="icons-conta"> </section>
<?php include "../includes/footer.php"; ?>