<?php include "../includes/header.php";
include "slider.php";

?>
<div class="admin_right">
<div class="order-details-container">
        <h2>Chi Tiết Đơn Hàng</h2>

        <!-- Trang 1: Bảng thông tin đơn hàng -->
        <div id="order-info">
            <h3>Thông Tin Đơn Hàng</h3>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Tên Người Đặt</th>
                        <th>ID Giỏ Hàng</th>
                        <th>Phương Thức Thanh Toán</th>
                        <th>Thời Gian Đặt Hàng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nguyễn Văn A</td>
                        <td>123</td>
                        <td>Thanh Toán Khi Nhận Hàng</td>
                        <td>2024-08-16 14:30:00</td>
                    </tr>
                </tbody>
            </table>
            <button class="listpayment" onclick="showDetails()">Xem Chi Tiết</button>
        </div>

        <!-- Trang 2: Chi tiết sản phẩm -->
        <div id="product-details" class="hidden">
            <h3>Chi Tiết Sản Phẩm</h3>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá Tiền</th>
                        <th>Thành Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sản Phẩm A</td>
                        <td>2</td>
                        <td>50.000 đ</td>
                        <td>100.000 đ</td>
                    </tr>
                    <tr>
                        <td>Sản Phẩm B</td>
                        <td>1</td>
                        <td>30.000 đ</td>
                        <td>30.000 đ</td>
                    </tr>
                    <!-- Dòng tổng tiền -->
                    <tr>
                        <td colspan="3"><strong>Tổng Tiền</strong></td>
                        <td><strong>130.000 đ</strong></td>
                    </tr>
                </tbody>
            </table>
            <button class="listpayment" onclick="showInfo()">Quay Lại</button>
        </div>
    </div>

    <script>
        function showDetails() {
            document.getElementById('order-info').classList.add('hidden');
            document.getElementById('product-details').classList.remove('hidden');
        }

        function showInfo() {
            document.getElementById('order-info').classList.remove('hidden');
            document.getElementById('product-details').classList.add('hidden');
        }
    </script>

</section>
    <section class="icons-conta"></section>
    <?php include "../includes/footer.php" ?>