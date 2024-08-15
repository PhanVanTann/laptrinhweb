
<?php include "../includes/header.php" ;
include "../class/adminclass.php";
?>
<?php

$product = new admin;
$show_product = $product->show_product();

?>
<section class="icons-conta"></section>
    <section class="cartegory">
        <div class="cartegory_left">
            <div class="cartegory_left_cartegory">
                <h2>cartegory</h2>
                <ul>
                    <li><input type="checkbox"><label>Kem Chống Nắng</label></li>
                    <li><input type="checkbox"><label>Kem Dưỡng Da</label></li>
                    <li><input type="checkbox"><label>Sửa Rửa Mặt</label></li>
                    <li><input type="checkbox"><label>Son Môi</label></li>
                    <li><input type="checkbox"><label>Mặt Nạ</label></li>
                </ul>              
            </div>

            <div class="cartegory_left_trademark">
                <h2>trademark</h2>
                <ul>
                    <li><input type="checkbox"><label>Merzy</label></li>
                    <li><input type="checkbox"><label>L'Olear</label></li>
                    <li><input type="checkbox"><label>DHC</label></li>
                    <li><input type="checkbox"><label>SVR</label></li>
                    <li><input type="checkbox"><label>3CE</label></li>
                </ul>              
            </div>

            <div class="cartegory_left_price">
                <h2>Giá</h2>
                <form action="">
                    <input type="number" placeholder="Từ">
                    <span>-</span>
                    <input type="number" placeholder="Đến">
                    <button >Áp Dụng</button>
                </form>
            </div>
        </div>

        <div class="cartegory_right">
            <section class="cartegory_right_top">
                <nav>
                    <a href="#">giá Thấp</a>
                    <a href="#">giá Cao</a>
                    <a href="#">Mới Nhất</a>
                    <a href="#">Giảm Giá</a>
                </nav>
            </section>
            <hr>
            <div class="cartegory_right_center">
                        <?php 
                            
                            if($show_product){
                            while($result = $show_product->fetch_assoc()){

                            
                        ?>
                    <div class="product-item">
                    <a href="product.php?product_id=<?php echo $result['product_id'] ?>">
                        <img src="../uploads/uploads_product/<?php echo $result['product_img'] ?>">
                        <div class="product-info">
                            <h3 class="product-name"><?php echo $result['product_name']?></h3>
                            <br>
                            <h3 class="product-brand"><?php echo $result['product_trademark']?></h3>                     
                            <h1 class="product-price"><?php echo number_format($result['product_price'],0,',','.' );?> đ</h1>
                        </div>
                        </a>
                    </div>
                    <?php  }}?>
                    
                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>


                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>


                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>


                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>


                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>


                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>


                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>


                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>


                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>


                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>


                    


                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                    <div class="product-item">
                        <a href="product.php">
                            <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="L'Oreal">
                            <div class="product-info">
                                <h2 class="product-brand">L'Oreal</h2>    
                                <h3 class="product-name">Nước Tẩy Trang L'Oreal Tươi Mát Cho Micellar Water 3-in-1 Refreshing Even</h3>
                                <h1 class="product-price">148.000 đ</h1>
                            </div>
                        </a>
                    </div>

                        
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