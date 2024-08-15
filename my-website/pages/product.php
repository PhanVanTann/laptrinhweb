

<?php include "../includes/header.php";
 include "../class/adminclass.php";
?>
<?php 

$userRole = $_SESSION['roles'] ?? 0;
$isUser = $userRole == 0;

if (isset($_GET['product_id'])) {
    $product_id = intval($_GET['product_id']); }
$product = new admin;
$show_productid = $product->show_productid($product_id);

if($show_productid){
    $result = $show_productid->fetch_assoc();
    
}
?>
    <section class="icons-conta"> </section>
    
    <section class="product_decs">
        
        <div class="product_decs_left">
            <div class="product_decs_left_mainImg">
                <img id="mainImage" src="../uploads/uploads_product/<?php echo $result['product_img'] ?>" >
            </div>
            <div class="product_decs_left_Imgsmail">
                    <img src="../uploads/uploads_product/<?php echo $result['product_img_mt1'] ?>" alt="Thumbnail 1" onclick="changeImage('../uploads/uploads_product/<?php echo $result['product_img_mt1'] ?>')">
                    <img src="../uploads/uploads_product/<?php echo $result['product_img_mt2'] ?>" alt="Thumbnail 1" onclick="changeImage('../uploads/uploads_product/<?php echo $result['product_img_mt2'] ?>')">
                    <img src="../uploads/uploads_product/<?php echo $result['product_img_mt3'] ?>" alt="Thumbnail 1" onclick="changeImage('../uploads/uploads_product/<?php echo $result['product_img_mt3'] ?>')">
                    <img src="../uploads/uploads_product/<?php echo $result['product_img_mt4'] ?>" alt="Thumbnail 1" onclick="changeImage('../uploads/uploads_product/<?php echo $result['product_img_mt4'] ?>')">
            </div>
        </div>

        <div class="product_decs_right">
            <hr>
            <div class="product_decs_right_name">
                <h2><?php echo $result['product_name'] ?> </h2>
            </div>
            <div class="product_decs_right_price"><?php echo number_format($result['product_price'],0,',','.' );?> đ</div>
            
            <div class="product_decs_right_quantity">
                <label for="">Số Lượng:</label>
                <button id="decrease-btn" class="quantity-btn">-</button>
                <input type="text" id="quantity-input" value="1" readonly />
                <button id="increase-btn" class="quantity-btn">+</button>
            </div>

            <div class="product_decs_right_decs">
                <h3>Chi tiết sản phẩm</h3>
                        <p>- <?php echo $result['product_desc'] ?></p>
                        
            </div>
            <?php if ($isUser): ?>
            <div class="product_decs_right_buy">
                <button>Thêm vào giỏ hàng</button>
                <button>Mua ngay NowFree 2H</button>
            </div>
           
            <?php endif; ?>
            <hr>
        </div>
        

    </section>

    <section class="icons-conta"> </section>
    <?php include "../includes/footer.php" ?>
   