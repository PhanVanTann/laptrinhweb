<?php include "../includes/header.php";
include "../class/adminclass.php";

$userRole = $_SESSION['roles'] ?? 0;
$isUser = $userRole == 0;

$product_id = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;
$product = new admin;
$show_productid = $product->show_productid($product_id);

if ($show_productid) {
    $result = $show_productid->fetch_assoc();
} else {
    die("Product not found.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $product_id = intval($_POST['product_id']);
    $product_img = $_POST['product_img'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quanlity = intval($_POST['product_quanlity']);

    // Lấy user_id từ session
    $user_id = $_SESSION['user_id'] ?? 0;

    // Tạo đối tượng admin và gọi phương thức insert_cart
    $admin = new admin();
    $admin->insert_cart_item($user_id, $product_id, $product_img, $product_name, $product_price, $product_quanlity);

    // Cập nhật giỏ hàng trong session
    $_SESSION['cart_items'] = $admin->get_cart_items()->fetch_all(MYSQLI_ASSOC);

    // Chuyển hướng đến trang giỏ hàng
    header('Location: cart.php');
    exit();
}

?>
 
<section class="icons-conta"></section>
<section class="product_decs">
    <div class="product_decs_left">
        <div class="product_decs_left_mainImg">
            <img id="mainImage" src="../uploads/uploads_product/<?php echo htmlspecialchars($result['product_img']); ?>" >
        </div>
        <div class="product_decs_left_Imgsmail">
        
            <img src="../uploads/uploads_product/<?php echo htmlspecialchars($result['product_img_mt1']); ?>" alt="Thumbnail 1" onclick="changeImage('../uploads/uploads_product/<?php echo htmlspecialchars($result['product_img_mt1']); ?>')">
            <img src="../uploads/uploads_product/<?php echo htmlspecialchars($result['product_img_mt2']); ?>" alt="Thumbnail 2" onclick="changeImage('../uploads/uploads_product/<?php echo htmlspecialchars($result['product_img_mt2']); ?>')">
            <img src="../uploads/uploads_product/<?php echo htmlspecialchars($result['product_img_mt3']); ?>" alt="Thumbnail 3" onclick="changeImage('../uploads/uploads_product/<?php echo htmlspecialchars($result['product_img_mt3']); ?>')">
        </div>
       
    </div>
    <script src="../assets/js/product.js"></script>
    <div class="product_decs_right">
        <hr>
        <div class="product_decs_right_name">
            <h2><?php echo htmlspecialchars($result['product_name']); ?> </h2>
        </div>
        <div class="product_decs_right_price"><?php echo number_format($result['product_price'],0,',','.' );?> đ</div>

        <div class="product_decs_right_decs">
            <h3>Chi tiết sản phẩm</h3>
            <p>- <?php echo htmlspecialchars($result['product_desc']); ?></p>
        </div>
        <?php if ($isUser): ?>
            <div class="product_decs_right_buy">
                <form id="addToCartForm" action="product.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($result['product_id']); ?>">
                    <input type="hidden" name="product_img" value="<?php echo htmlspecialchars($result['product_img']); ?>">
                    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($result['product_name']); ?>">
                    <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($result['product_price']); ?>">
                    <div class="quanlity">
                        <label for="">Số Lượng:</label>
                        <input class="product_decs_right_quantity" type="number" name="product_quanlity" id="quantity-input" value="1" min="1">
                    </div>
                    <button type="submit">Thêm vào giỏ hàng</button>
                </form>
            </div>
        <?php endif; ?>
        <hr>
    </div>
   
</section>
<section class="icons-conta"></section>
<?php include "../includes/footer.php" ?>
