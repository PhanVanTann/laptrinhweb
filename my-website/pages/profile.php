<?php include "../includes/header.php";
include "../class/profileclass.php";

if (!isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit();
}
?>
<?php 

// Giả sử bạn đã lưu thông tin người dùng trong phiên
// Lấy role của người dùng từ phiên hoặc từ cơ sở dữ liệu
$userRole = $_SESSION['roles'] ?? 0; // Mặc định là 0 nếu không có giá trị

// Kiểm tra nếu người dùng là admin
$isAdmin = $userRole == 1;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $passwords = $_POST['passwords'];

    $profile = new Profile();
    $result = $profile->update_profile($userId, $fullname, $phone,$email,$address,$passwords);
}

$profile = new profile; 
$userId = $_SESSION['user_id'];
$show_profile = $profile->show_profile($userId);
$result = null;
if($show_profile){
    $result = $show_profile->fetch_assoc();
}
?>
<section class="icons-conta"></section>
<section class="profile">
    <div class="profile_left">
        <div class="profile_left_img">
            <img src="../assets/img/avatar.png">
            <h3><?php echo $result['fullname'] ?></h3>
        </div>
        <hr>
        <div  class="profile_left_manageprofile">
            <h2>Quản Lý Thông Tin Cá Nhân</h2>
        
                
                <li><a href="profile.php">Thông Tin Của Bạn</a></li>
                <?php if ($isUser): ?>
                <li><a href="status.php">Đơn Hàng Của Bạn</a></li>
                <?php endif; ?>
        </div>
        <?php if ($isAdmin): ?>
        <div class="profile_left_manageadmin">
            <h2><a href="../admin/cartegorylist.php">Quản Lý Cửa Hàng</a> </h2>           
        </div>
        <?php endif; ?>
        
    </div>
    <div class="profile_right">
        <div class="profile_right_manager">
            <hr>
                   

                <div class="profile_right_managerinformation" id="information">
                    <form class="form_profile" action="" method="post">
                        <h2>Thông Tin Của Bạn</h2>
                        <label for="">Họ Và Tên:</label>
                        <input type="text" name="fullname" id="name" value="<?php echo $result['fullname'] ?>" readonly>
                        <label for="">Số Điện Thoại:</label>
                        <input type="number" name="phone" id="phone" value="<?php echo $result['phone'] ?>"  readonly>
                        <label for="">Gmail:</label>
                        <input type="email" name="email" id="email" value="<?php echo $result['email'] ?>"  readonly>                     
                        <label for="">Địa Chỉ Nhận Hàng:</label>
                        <input type="text" name="address" id="address" value="<?php echo $result['deliveryaddress'] ?>"  readonly>
                        <label>Mật Khẩu:</label>
                        <input type="password" name="passwords" value="<?php echo $result['passwords'] ?>" readonly>
                        <button type="button" id="editButton">Sửa</button>
                        <button type="submit" id="saveButton" style="display:none;" >Lưu</button>
                    </form>
                    <hr>
                </div>
                
                
        </div>
    </div>
    <script src="../assets/js/profile.js"></script> 
</section>
    <section class="icons-conta"></section>
    <?php include "../includes/footer.php";
    echo "Xin chào, " . $_SESSION['fullname']; ?>