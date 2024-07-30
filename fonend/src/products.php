<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/3a92867321.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="cartegory.css">
    <link rel="stylesheet" href="products.css">
</head>
<body>
<?php 
        include "header.php"
    ?>

    <div class="link-cartegory"><a href="#">Trang chủ </a><span>&#10230;</span> <a href="#"> Kem Chống Nắng </a></a><span>&#10230;</span><a href="#"> Kem Chống Nắng La Roche-Posay </a></div>
     <section class="detail">
        <div class="detail">
            <div class="detail-img">
                <div class="main-image">
                    <img id="mainImage" src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="Sữa rửa mặt ELIXIR">
                </div>
                <div class="thumbnails">
                    <img src="../img/kemchongnag1.jpg" alt="Thumbnail 1" onclick="changeImage('../img/kemchongnag1.jpg')">
                    <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="Thumbnail 2" onclick="changeImage('https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png')">
                    <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="Thumbnail 3" onclick="changeImage('https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png')">
                    <img src="https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png" alt="Thumbnail 4" onclick="changeImage('https://media.hcdn.vn/catalog/product/f/a/facebook-dynamic-205100137-1695896128_img_385x385_622873_fit_center.png')">
                </div>
            </div>
            <div class="detail-content">
                <h1>Kem Chống Nắng La Roche-Posay Kiểm Soát Dầu SPF50+ 50ml</h1>
                <h2>Anthelios UV Mune 400 Oil Control Gel-Cream</h2>
                <p class="certification">Số công bố với Bộ Y Tế: 154960/21/CBMP-QLD</p>
                <div class="rating">
                    <span>★ ★ ★ ★ ★</span>
                    <span class="danhgia">160 đánh giá | 694 Hỏi đáp</span>
                </div>
                <div class="price">
                    <span class="price-sale">364.000 ₫</span>
                    <span class="original-price">560.000 ₫</span>
                    <span class="discount">(Giảm giá: 196.000 ₫ - 35%)</span>
                </div>
                <div class="flash-deal">
                    <span>FLASH DEAL</span>
                    <span class="countdown" id="countdown">Kết thúc trong: 00:41:06</span>
                </div>
                <div class="shipping">
                    <span>Miễn phí vận chuyển</span>
                    <span>Giao nhanh miễn phí 2H tại 200 chi nhánh. Trễ tặng 100K</span>
                </div>
                <div class="stock">
                    <span>200/200 Chi nhánh còn sản phẩm</span>
                </div>
                <div class="actions">
                    <button>Thêm vào giỏ hàng</button>
                    <button>Mua ngay NowFree 2H</button>
                </div>
                <div class="mota">
                    <div class="mota" id="mota">
                        <h3>Chi tiết sản phẩm</h3>
                        <p>Kem Chống Nắng La Roche-Posay Anthelios UV Mune 400 Oil Control Gel-Cream SPF50+ giúp kiểm soát dầu và bảo vệ da khỏi tác hại của tia UV. Phù hợp với làn da dầu, dễ bị mụn.</p>
                        <ul>
                            <li>Dung tích: 50ml</li>
                            <li>Loại da: Da dầu, da mụn</li>
                            <li>Xuất xứ: Pháp</li>
                            <li>Công dụng: Kiểm soát dầu, bảo vệ da khỏi tia UV</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     </section>
    
 
</body>
<script src="products.js"></script>


</html>