
<?php include "../includes/header.php" ;
    include "../class/adminclass.php";
?>
<?php

$product = new admin;
$show_product = $product->show_product();

?>
<body>
<section class ="home" id="home">
        <div class="content">
           
        <script>
            // Mảng chứa các URL hình nền
            const backgrounds = [
                'url("../assets/img/background.jpg")',
                'url("../assets/img/background1.jpg")',
                'url("../assets/img/background2.jpg")',
            ];
        
            let currentIndex = 0;
        
            function changeBackground(index) {
                // Thay đổi hình nền
                document.querySelector('.home').style.backgroundImage = backgrounds[index];
                currentIndex = index;
            }
        
            function nextBackground() {
                currentIndex = (currentIndex + 1) % backgrounds.length;
                changeBackground(currentIndex);
            }
        
            function prevBackground() {
                currentIndex = (currentIndex - 1 + backgrounds.length) % backgrounds.length;
                changeBackground(currentIndex);
            }
        
            // Thay đổi hình nền mỗi 5 giây
            const intervalId = setInterval(nextBackground, 5000);
        
            // Gọi hàm lần đầu tiên để thiết lập hình nền ban đầu
            changeBackground(currentIndex);
        
        
        </script>

            <div>            
                <h3>Cosmetics</h3> 
                <spam>Safety and quality</spam>
                <p>Safety and Quality
                We believe that every person deserves clear and stylish vision. At Eyewear ,
                 we bring you eyewear products that are safe, durable, and designed for comfort.
                </p>
                <a href ="#products" class = "shopnow">shop now</a>
            </div>

        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading"><span> about </span> us </h1>
        <div class="row">
            <div class="img-container">
                <img src="../assets/img/best.webp" ></img>
                <h3>best sellers</h3>
            </div>

            <div class="content">
                <h3>why choose us? </h3>
                <p>Premium Quality Eyewear:
                We offer a curated selection of high-quality eyewear that is durable, stylish, and comfortable.
                 Our products are made with premium materials to ensure long-lasting performance and clear vision.
                </p>
                <p>Expertly Crafted Designs:
                Our eyewear is developed by optical experts and designers to cater to all face shapes and personal styles.
                 We’re committed to helping you achieve the perfect look with frames that fit and lenses that perform.</p>
                <p>
                Sustainable Vision:
                We are committed to sustainable practices. 
                Our packaging is eco-friendly, and we prioritize products that are both good for your eyes and kind to the environment.
                </p>
       
            </div>
        </div>

    </section>

<section class="icons-conta">
    <div class="icon">
        <img src="../assets/img/free-shipping.png" alt="">
        <div class="info">
            <h3>free dilivery</h3>
            <span>on all orders</span>
        </div>
    </div>
    
    <div class="icon">
        <img src="../assets/img/money-bag (1).png" alt="">
        <div class="info">
            <h3>10 days return</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icon">
        <img src="../assets/img/gift-box.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icon">
        <img src="../assets/img/credit-card (1).png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by payman</span>
        </div>
    </div>
</section>

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span></h1>
        
    <div class="box-container">
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

       
    </div>
     
    <div class="product-button">
        <button id="loadMore">Xem thêm</button>       
        <button id="showLess" >Thu gọn</button>
    </div>

        <script>
            let productsPerPage = 20;
            let totalProducts = document.querySelectorAll('.product-item').length;
            let productsShown = 0;
            let maxProductsShown = 0;

            function showMoreProducts() {
                let products = document.querySelectorAll('.product-item');
                let productsToShow = Math.min(productsPerPage, totalProducts - productsShown);

                for (let i = productsShown; i < productsShown + productsToShow; i++) {
                    products[i].style.display = 'flex'; // Hiển thị sản phẩm dưới dạng flex
                }

                productsShown += productsToShow;
                maxProductsShown = productsShown;

                // Kiểm tra số sản phẩm đã hiển thị
                if (productsShown >= totalProducts) {
                    document.getElementById('loadMore').style.display = 'none';
                }

                // Hiển thị nút "Thu gọn" nếu số lượng sản phẩm hiển thị lớn hơn số sản phẩm trên trang
                if (productsShown > productsPerPage) {
                    document.getElementById('showLess').style.display = 'inline-block';
                }
            }

            function showLessProducts() {
                let products = document.querySelectorAll('.product-item');

                // Xác định số lượng sản phẩm cần ẩn
                let productsToHide = Math.min(productsPerPage, maxProductsShown - productsPerPage);

                for (let i = maxProductsShown - 1; i >= maxProductsShown - productsToHide; i--) {
                    products[i].style.display = 'none';
                }

                productsShown -= productsToHide;
                maxProductsShown = productsShown;

                // Hiển thị lại nút "Xem thêm" nếu có sản phẩm bị thu gọn
                if (productsShown < totalProducts) {
                    document.getElementById('loadMore').style.display = 'inline-block';
                }

                // Ẩn nút "Thu gọn" nếu chỉ còn hiển thị sản phẩm ban đầu
                if (productsShown <= productsPerPage) {
                    document.getElementById('showLess').style.display = 'none';
                }
            }

            // Đảm bảo đoạn mã này chỉ chạy sau khi DOM đã sẵn sàng
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('loadMore').addEventListener('click', showMoreProducts);
                document.getElementById('showLess').addEventListener('click', showLessProducts);
                
                // Hiển thị các sản phẩm ban đầu khi trang được tải
                showMoreProducts(); // Chạy hàm này ngay khi DOM sẵn sàng
            });

        </script>
        
</section>
<?php include "../includes/footer.php" ?>
</body>
</html>