<?php
include "../includes/header.php";
include "../class/adminclass.php";?>
<section class="icons-conta"> </section>


<div class="container_payment">
        <h2>Thông Tin Thanh Toán</h2>
        <form action="process_payment.php" method="post">
            <div class="form-group">
                <label for="name">Họ và Tên:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="phone">Số Điện Thoại:</label>
                <input type="text" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="address">Địa Chỉ:</label>
                <input type="text" id="address" name="address" rows="4" required></input>
            </div>

            <h3>Thông Tin Đơn Hàng</h3>
            <table>
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá Tiền</th>
                        <th>Thành Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dữ liệu sản phẩm sẽ được lặp qua ở đây -->
                    <tr>
                        <td>Sản phẩm A</td>
                        <td>2</td>
                        <td>100.000 đ</td>
                        <td>200.000 đ</td>
                    </tr>
                    <tr>
                        <td>Sản phẩm B</td>
                        <td>1</td>
                        <td>150.000 đ</td>
                        <td>150.000 đ</td>
                    </tr>
                    <!-- Dòng tổng tiền -->
                    <tr>
                        <td colspan="3"><strong>Tổng Tiền</strong></td>
                        <td><strong>350.000 đ</strong></td>
                    </tr>
                </tbody>
            </table>

            <div class="form-group">
                <label for="payment_method">Phương Thức Thanh Toán:</label>
                    <input type="text" value="Thanh Toán Khi Nhận Hàng" readonly></input>
                   
               
            </div>

            <button type="submit" class="btn">Xác Nhận Đơn Hàng</button>
        </form>
    </div>
</section>
<section class="icons-conta"> </section>
<?php include "../includes/footer.php"; ?>