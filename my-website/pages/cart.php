<?php include "../includes/header.php";
include "../class/adminclass.php";

// Tạo đối tượng admin
$admin = new admin();
$cart_items = $admin->get_cart_items(); // Gọi phương thức để lấy sản phẩm từ giỏ hàng
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['product_id'])) {
    $product_id = intval($_GET['product_id']);
    $admin->delete_from_cart($product_id);
    header('Location: cart.php');
    exit();
}

?>

<section class="icons-conta"> </section>
<section class="cart">
    <div class="cart_left">
        <div class="cart_left_img">
            <img src="../assets/img/avatar.png">
            <h3>Phan Van Tan</h3>
        </div>
        <hr>
        <div class="cart_left_managecart">
            <h2>Quản Lý Giỏ Hàng</h2>
        </div>
    </div>
    <div class="cart_right">
        <hr>
    
        <h2>Giỏ Hàng Của Bạn</h2>
        <table>
            <tr>
                <th>STT</th>
                <th></th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Tiền</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Thao Tác</th>
            </tr>
            <?php 
            $stt = 1;
            while ($item = $cart_items->fetch_assoc()): ?>
            <tr>
                <td><?php echo $stt++; ?></td>
                <td><img src="../uploads/uploads_product/<?php echo $item['product_img']; ?>" alt="Product Image" width="50"></td>
                <td><?php echo $item['product_name']; ?></td>
                <td><?php echo number_format($item['product_price'], 0, ',', '.'); ?> đ</td>
                <td><?php echo $item['product_quanlity']; ?></td>
                <td><?php echo number_format($item['product_price'] * $item['product_quanlity'], 0, ',', '.'); ?> đ</td>
                <td><a href="cart.php?action=delete&product_id=<?php echo $item['product_id']; ?>">Xóa</a></td>
            </tr>
            <?php endwhile; ?>

        </table>
        <hr>
            <button class="cart_right_payment">Thanh Toán</button>
      
        
        

        
        
    </div>
    
</section>

<section class="icons-conta"> </section>
<?php include "../includes/footer.php"; ?>
