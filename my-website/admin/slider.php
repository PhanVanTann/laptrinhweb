<section class="icons-conta"> </section>
<section class="admin">
    <?php 
        include "../class/adminclass.php"; 
        if (!isset($_SESSION['user_id'])) {
            header("Location:login.php");
            exit();
        }
        
        // Tạo đối tượng admin
        $admin = new admin();
        $user_id = $_SESSION['user_id'];
        $profile = $admin->get_user_profile($user_id);
        
        // Lấy thông tin người dùng
        $result = null;
        if ($profile && $profile->num_rows > 0) {
            $result = $profile->fetch_assoc();
        }
    ?>
    <div class="admin_left">
        <div class="admin_left_img">
        <img src="../assets/img/avatar.png">
            <h3><?php echo $result['fullname'] ?></h3>
        </div>
        <hr>
        <div class="admin_left_manageadmin">            
            <h2>Quản Lý Cửa Hàng</h2> 
            <ul>
                <li><a href="cartegoryadd.php">Thêm Loại Sản Phẩm</a></li>
                <li><a  href="cartegorylist.php">Danh Sách Loại Sản Phẩm</a></li>
                <li><a  href="trademarksadd.php">Thêm Thương Hiệu</a></li>
                <li><a  href="trademarkslist.php">Danh Sách Thương Hiệu</a></li>
                <li><a  href="productadd.php">Thêm Sản Phẩm</a></li>
                <li><a  href="productlist.php">Danh Sách Sản Phẩm</a></li>
                <li><a  href="listpayment.php">Quản Lý thông tin Đơn Hàng</a></li>
            </ul> 
            
            <h2><a href="../pages/profile.php">Quản Lý Thông Tin Cá Nhân</a></h2>           
        </div>        
    </div>