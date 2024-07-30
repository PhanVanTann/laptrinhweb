<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/3a92867321.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="taikhoan.css">
</head>
<body>
    
    <?php 
        include "header.php"
    ?>
     <div class="container">
        <aside class="sidebar">
            <div class="user-info">
                <img src="avatar.png" alt="Avatar" class="avatar">
                <span>Chào Tấn</span>
                <a href="#">Chỉnh sửa tài khoản</a>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#" onclick="showSection('address-section')">Sổ địa chỉ nhận hàng</a></li>
                    <li><a href="#" onclick="showSection('account-section')">Thông tin tài khoản</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <div id="address-section" class="content-section">
                <h2>Sổ địa chỉ nhận hàng</h2>
                <div class="address-card">
                    <div class="header">
                        <span class="title">Địa chỉ nhận hàng</span>
                        <a href="#" class="change-link">Thay đổi</a>
                    </div>
                    <div class="content">
                        <span class="label home-label">Nhà riêng</span>
                        <span class="name">phan van tan - 0376215521</span>
                        <span class="address">đại học, đại học, Quận 2, Hồ Chí Minh</span>
                    </div>
                </div>
            </div>
            <div id="account-section" class="content-section" style="display: none;">
                <h2>Thông tin tài khoản</h2>
                <form>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="2251150034@ut.edu.vn" readonly>
                    <label for="name">Tên:</label>
                    <input type="text" id="name" name="name" value="Phan Văn Tấn" readonly>
                    <label for="phone">Số điện thoại:</label>
                    <input type="text" id="phone" name="phone" value="0376215521" readonly>
                    <label for="gender">Giới tính:</label>
                    <div>
                        <input type="radio" id="male" name="gender" value="male" disabled>
                        <label for="male">Nam</label>
                        <input type="radio" id="female" name="gender" value="female" disabled>
                        <label for="female">Nữ</label>
                        <input type="radio" id="undefined" name="gender" value="undefined" checked disabled>
                        <label for="undefined">Không xác định</label>
                    </div>
                    <label for="birthday">Ngày sinh:</label>
                    <div>
                        <select id="day" name="day" disabled>
                            <option value="">Ngày</option>
                        </select>
                        <select id="month" name="month" disabled>
                            <option value="">Tháng</option>
                        </select>
                        <select id="year" name="year" disabled>
                            <option value="">Năm</option>
                        </select>
                    </div>
                    <button type="submit">Cập nhật</button>
                </form>
            </div>
        </main>
    </div>
</body>
<script>
        function showSection(sectionId) {
            var sections = document.getElementsByClassName('content-section');
            for (var i = 0; i < sections.length; i++) {
                sections[i].style.display = 'none';
            }
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>


</html>