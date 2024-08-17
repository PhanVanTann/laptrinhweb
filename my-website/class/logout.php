<?php
include "adminclass.php";
session_start();

// Lưu giỏ hàng của người dùng trước khi đăng xuất
$admin = new admin();

session_unset();
session_destroy();

// Chuyển hướng đến trang chính
header("Location:../pages/home.php");
exit();
?>
