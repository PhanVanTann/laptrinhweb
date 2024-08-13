<?php include "../includes/header.php"?>
<?php 
session_start();
// Giả sử bạn đã lưu thông tin người dùng trong phiên
// Lấy role của người dùng từ phiên hoặc từ cơ sở dữ liệu
$userRole = $_SESSION['roles'] ?? 0; // Mặc định là 0 nếu không có giá trị

// Kiểm tra nếu người dùng là admin
$isAdmin = $userRole == 1;
?>
<section class="icons-conta"></section>
<section class="profile">
    <div class="profile_left">
        <div class="profile_left_img">
            <img src="anhr/gift.png">
            <h3>Phan Van Tan</h3>
        </div>
        <hr>
        <div  class="profile_left_manageprofile">
            <h2>Quản Lý Thông Tin Cá Nhân</h2>
            <ul>
                <li><a href="#account">Tài Khoản Và Mật Khẩu</a></li>
                <li><a href="#information">Thông Tin Của Bạn</a></li>
            </ul>
        </div>
        <?php if ($isAdmin): ?>
        <div class="profile_left_manageadmin">
            <h2><a href="admin.php">Quản Lý Cửa Hàng</a> </h2>           
        </div>
        <?php endif; ?>
        
    </div>
    <div class="profile_right">
        <div class="profile_right_manager">
            <hr>
                <div class="profile_right_manageraccount" id="account">                 
                    <form action="">         
                        <h2>Tài Khoản Mật Khẩu</h2>              
                        <label for="">Email:</label>
                        <input type="email" value="tan@gmail.com" readonly>
                        <label>Mật Khẩu:</label>
                        <input type="text" value="Mật Khẩu" readonly>
                        <button type="button" id="changePasswordButton">Thay Đổi Mật Khẩu</button>
                    </form>
                
                </div>
                <div id="changePasswordModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>Thay Đổi Mật Khẩu</h2>
                            <form id="changePasswordForm">
                                <label for="">Nhập Mật Khẩu Cũ:</label>
                                <input type="text" placeholder="Mật khẩu cũ">
                                <label>Nhập Mật Khẩu Mới:</label>
                                <input type="text" placeholder="Mật Khẩu mới">
                                <button type="submit">Thay Đổi</button>
                            </form>
                        </div>
                </div>

                <div class="profile_right_managerinformation" id="information">
                    <form class="form_profile" action="">
                        <h2>Thông Tin</h2>
                        <label for="">Họ Và Tên:</label>
                        <input type="text"  id="name" value="Phan Văn Tấn" readonly>
                        <label for="">Số Điện Thoại:</label>
                        <input type="number" name="" id="phone" value="123456789"  readonly>
                        <label for="">Gmail:</label>
                        <input type="email" name="" id="email" value="tan@gmail.com"  readonly>                     
                        <label for="">Địa Chỉ Nhận Hàng:</label>
                        <input type="text" id="address" value="quan9/đình phong phú"  readonly>
                        <button type="button" id="editButton">Sửa</button>
                        <button type="submit" id="saveButton" style="display:none;" >Lưu</button>
                    </form>
                    <hr>
                </div>
                
                
        </div>
    </div>
</section>
    <section class="icons-conta"></section>
    <?php include "../includes/footer.php" ?>