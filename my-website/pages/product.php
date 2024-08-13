

   <?php include "../includes/header.php"?>
   <?php 
    session_start();
    $userRole = $_SESSION['roles'] ?? 0;
    $isUser = $userRole == 0;
?>
    <section class="icons-conta"> </section>
    
    <section class="product_decs">
        
        <div class="product_decs_left">
            <div class="product_decs_left_mainImg">
                <img id="mainImage" src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" >
            </div>
            <div class="product_decs_left_Imgsmail">
                    <img src="../assets/img/kemchongnag1.jpg" alt="Thumbnail 1" onclick="changeImage('../assets/img/kemchongnag1.jpg')">
                    <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="Thumbnail 2" onclick="changeImage('https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png')">
                    <img src="../assets/img/kemchongnag1.jpg" alt="Thumbnail 1" onclick="changeImage('../assets/img/kemchongnag1.jpg')">
                    <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="Thumbnail 4" onclick="changeImage('https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png')">
            </div>
        </div>

        <div class="product_decs_right">
            <hr>
            <div class="product_decs_right_name">
                <h2>[V1 - V12] Son Kem Lì Merzy The First Velvet Tint 4.5g </h2>
            </div>
            <div class="product_decs_right_price">200.000đ</div>
            
            <div class="product_decs_right_quantity">
                <label for="">Số Lượng:</label>
                <button id="decrease-btn" class="quantity-btn">-</button>
                <input type="text" id="quantity-input" value="1" readonly />
                <button id="increase-btn" class="quantity-btn">+</button>
            </div>

            <div class="product_decs_right_decs">
                <h3>Chi tiết sản phẩm</h3>
                        <p>Kem Chống Nắng La Roche-Posay Anthelios UV Mune 400 Oil Control Gel-Cream SPF50+ giúp kiểm soát dầu và bảo vệ da khỏi tác hại của tia UV. Phù hợp với làn da dầu, dễ bị mụn.</p>
                        <ul>
                            <li>Dung tích: 50ml</li>
                            <li>Loại da: Da dầu, da mụn</li>
                            <li>Xuất xứ: Pháp</li>
                            <li>Công dụng: Kiểm soát dầu, bảo vệ da khỏi tia UV</li>
                        </ul>
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
   