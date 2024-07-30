<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/3a92867321.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="buy.css">
</head>
<body>
    <?php 
        include "header.php";
    ?>
    <section class="container">
        <div class="address-card">
            <div class="header">
                <span class="title">Địa chỉ nhận hàng</span>
                <a href="#" class="change-link">Thay đổi</a>
            </div>
            <div class="content">
                <span class="label ">Nhà riêng</span>
                <span class="name">phan van tan - 0376215521</span>
                <span class="address">đại học, đại học, Quận 2, Hồ Chí Minh</span>
            </div>
        </div>

        <div class="payment-method">
            <h3>Hình thức thanh toán</h3>
            <div class="payment-option">
                <input type="radio" id="cod" name="payment" checked>
                <label for="cod">Thanh toán khi nhận hàng (COD)</label>
            </div>
        </div>

        <div class="order-summary">
            <h3>Đơn hàng</h3>
            <div class="order-details">
                <p>Tạm tính (4): 326.000 ₫</p>
                <p>Thành tiền (Đã VAT): 326.000 ₫</p>
            </div>
            <p>Đã bao gồm VAT, phí đóng gói, phí vận chuyển và các chi phí khác vui lòng xem Chính sách vận chuyển</p>
        </div>

        <div class="product-list">
            <div class="product-item">
                <img src="../img/kemchongnag1.jpg" alt="Product 1">
                <div class="product-info">
                    <h4>L'Oreal Nước Tẩy Trang Tươi Mát Cho Da Dầu, Hỗn Hợp 400ml</h4>
                    <p>Giá sau voucher Hasaki: 148.000 ₫</p>
                </div>
            </div>
            <div class="product-item">
                <img src="../img/kemchongnag1.jpg" alt="Product 2">
                <div class="product-info">
                    <h4>L'Oreal Nước Tẩy Trang Làm Sạch Sâu Trang Điểm 400ml</h4>
                    <p>Giá sau voucher Hasaki: 178.000 ₫</p>
                </div>
            </div>
        </div>
        <button>Đặt hàng</button>
    </section>
</body>
</html>
