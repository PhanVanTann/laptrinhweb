
<?php include "../includes/header.php" ?>

<body>
<section class ="home" id="home">
        <div class="content">
           
        <script>
            // Mảng chứa các URL hình nền
            const backgrounds = [
                'url("../assets/img/web_slide_pc_1920_x_530_4f2d1b7d0f694e6cbb642870c1c9818f.webp")',
                'url("../assets/img/web_slide_pc_1920_x_530_9a7926617f0b4191906882966acf46e0.webp")',
                'url("../assets/img/web_slide_pc_1920_x_530_dad5bb23a5224830b5e8338479e727a3.webp")',
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
                <p>We believe that every woman deserves the most natural and radiant beauty. At [Website Name],
                     we bring you cosmetic products that are safe, effective, and skin-friendly.
                </p>
                <a href ="#products" class = "btn">shop now</a>
            </div>

        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading"><span> about </span> us </h1>
        <div class="row">
            <div class="img-container">
                <img src="../assets/img/bestsale.png" ></img>
                <h3>best sellers</h3>
            </div>

            <div class="content">
                <h3>why choose us? </h3>
                <p>Premium Quality Products: We offer a curated selection of high-quality cosmetics that are safe, effective, and cruelty-free. 
                    Our products are formulated with the finest ingredients to ensure the best results.
                </p>
                <p>Expertly Crafted Formulas: Our products are developed by beauty experts and dermatologists to cater to all skin types and tones.
                     We’re committed to helping you achieve the look you desire with formulas that work.</p>
                <p>
                    Sustainable Beauty: We are committed to sustainable practices.
                     Our packaging is eco-friendly, and we prioritize products that are kind to both your skin and the environment.
                </p>
       
            </div>
        </div>

    </section>

<section class="icons-conta">
    <div class="icon">
        <img src="anhr/free-shipping.png" alt="">
        <div class="info">
            <h3>free dilivery</h3>
            <span>on all orders</span>
        </div>
    </div>
    
    <div class="icon">
        <img src="anhr/money-bag (1).png" alt="">
        <div class="info">
            <h3>10 days return</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icon">
        <img src="anhr/gift-box.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icon">
        <img src="anhr/credit-card (1).png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by payman</span>
        </div>
    </div>
</section>

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span></h1>
   
    <div class="box-container">
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