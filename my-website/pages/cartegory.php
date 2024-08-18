
<?php include "../includes/header.php" ;
include "../class/adminclass.php";
?>
<?php



$cartegory_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : null;
$trademark = isset($_GET['trademark']) ? $_GET['trademark'] : null;
$sort = isset($_GET['sort']) ? $_GET['sort'] : null;
$price_min = isset($_GET['price_min']) ? floatval($_GET['price_min']) : null;
$price_max = isset($_GET['price_max']) ? floatval($_GET['price_max']) : null;

$product = new admin();
$show_product = $product->getFilteredProducts($cartegory_id, $trademark, $sort, $price_min, $price_max);


$trademark = new admin;
$show_trademark = $trademark->show_trademark();

$cartegory = new admin;
$show_cartegory = $cartegory->show_cartegory();

?>
<section class="icons-conta"></section>
    <section class="cartegory">
        <div class="cartegory_left">
            <div class="cartegory_left_cartegory">
                <h2>cartegory</h2>
                <ul>
                    <?php    
                                if($show_cartegory){
                                while($results = $show_cartegory->fetch_assoc()){

                            ?>
                    <li>
                        <input type="checkbox" id="category_<?php echo $results['cartegory_id']; ?>"
                            <?php echo (isset($_GET['category_id']) && $_GET['category_id'] == $results['cartegory_id']) ? 'checked' : ''; ?>
                            data-url="?category_id=<?php echo $results['cartegory_id']; ?>"
                            data-param="category_id">
                        <label for="category_<?php echo $results['cartegory_id']; ?>">
                            <?php echo htmlspecialchars($results['cartegory_name']); ?>
                        </label>
                    </li>



                    
                    <?php  }}?>
                </ul>              
            </div>

            <div class="cartegory_left_trademark">
                <h2>Thương hiệu</h2>
                <ul>
                    <?php while($results = $show_trademark->fetch_assoc()) { ?>
                        <li>
                            <input type="checkbox" id="trademark_<?php echo $results['product_trademark']; ?>"
                                <?php echo (isset($_GET['trademark']) && $_GET['trademark'] == $results['product_trademark']) ? 'checked' : ''; ?>
                                data-url="?trademark=<?php echo urlencode($results['product_trademark']); ?>"
                                data-param="trademark">
                            <label for="trademark_<?php echo $results['product_trademark']; ?>">
                                <?php echo htmlspecialchars($results['product_trademark']); ?>
                            </label>
                        </li>
                    <?php } ?>
                </ul>
            </div>


            <div class="cartegory_left_price">
                <h2>Giá</h2>
                <form action="">
                    <input type="number" name="price_min" placeholder="Từ" value="<?php echo isset($_GET['price_min']) ? intval($_GET['price_min']) : ''; ?>">
                    <span>-</span>
                    <input type="number" name="price_max" placeholder="Đến" value="<?php echo isset($_GET['price_max']) ? intval($_GET['price_max']) : ''; ?>">
                    <button type="submit">Áp Dụng</button>
                </form>
            </div>
        </div>

        <div class="cartegory_right">
            <section class="cartegory_right_top">
            <nav>
                <a href="?sort=price_asc<?php echo isset($_GET['category_id']) ? '&category_id=' . intval($_GET['category_id']) : ''; ?><?php echo isset($_GET['trademark']) ? '&trademark=' . urlencode($_GET['trademark']) : ''; ?>">Giá Thấp</a>
                <a href="?sort=price_desc<?php echo isset($_GET['category_id']) ? '&category_id=' . intval($_GET['category_id']) : ''; ?><?php echo isset($_GET['trademark']) ? '&trademark=' . urlencode($_GET['trademark']) : ''; ?>">Giá Cao</a>
            </nav>
            </section>
            <hr>
            <div class="cartegory_right_center">
                        <?php 
                            
                            if($show_product){
                            while($result = $show_product->fetch_assoc()){

                            
                        ?>
                    <div class="product-item">
                    <a href="product.php?product_id=<?php echo $result['product_id']; ?>">
                        <img src="../uploads/uploads_product/<?php echo $result['product_img']; ?>" alt="Product Image">
                        <div class="product-info">
                            <h3 class="product-name"><?php echo htmlspecialchars($result['product_name']); ?></h3>
                            <h3 class="product-brand"><?php echo htmlspecialchars($result['product_trademark']); ?></h3>
                            <h1 class="product-price"><?php echo number_format($result['product_price'], 0, ',', '.'); ?> đ</h1>
                        </div>
                    </a>
                    </div>
                    <?php  }}?>
                             
            </div>
            <script src="../assets/js/cartegory.js"></script> 
            
            <hr>
            <section class="cartegory_right_bottom" id="pagination">
               
            </section>
        </div>
    </section>
       

        <section class="icons-conta">
    
        </section>
        <?php include "../includes/footer.php" ?>