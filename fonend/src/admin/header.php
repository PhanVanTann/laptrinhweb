<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/3a92867321.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <?php 
            include "class/cartegoryclass.php";
            include "class/productclass.php";
            include "database.php";
            $cartegory = new cartegory;
            $show_cartegory = $cartegory->show_cartegory();
         
    ?>
    
</head>
<body>

<header>
        <div class="menu-logo">
       
            <li class="menu">
                <a class="menu-a" href="#">
                    <i class="fa-solid fa-bars"></i>
                 
                </a>
               
                <ul class="menu-display">
                <?php 
                if($show_cartegory ){
                    while($result = $show_cartegory->fetch_assoc()){
                ?>
                    <li><a href="#"><?php echo $result['cartegory_name'] ?></a></li>
                    <?php 
                }}
                ?>
                </ul>
                
            </li>
            <li class="logo">
                <a class="logo-img" href="#">
                    <img src="./img/logo.png" alt="Logo Shop" >
                        <span>HASAKI</span>
                </a>
            </li>
        </div>
        <div class="search">
            <form class="form-search">
                <input type="text" class="search-input" placeholder="Tìm sản phẩm, thương hiệu bạn mong muốn...">
                <button class="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <div class="other">
            <li>
                <div class="cart">
                        <a href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="notification">1</span>
                        </a>
                    
                </div>
            </li>
           
        
            <li>
                <div class="store">
                    <a href="#"><i class="fa-solid fa-shop"></i></a>
                </div>
            </li>

             <li class="taikhoan">
                <i class="fa-solid fa-user"></i>
                <a href="#" >
                    <span>Chào Tấn</span>
                    <i class="fa-solid fa-caret-down"></i>
                </a> 
                    
                    
                    <ul class="menu-taikhoan">
                        <li><a href="taikhoan.php">Thông Tin Tài Khoản</a></li>
                        <li><a href="cartegorylist.php">Quản Lý Cửa Hàng</a></li>
                        <li><a href="#">Quản Lý Đơn Hàng</a></li>
                        <li><a href="#">Địa Chỉ Giao Hàng</a></li>
                        <li><a href="#">Đăng Xuất</a></li>
                    </ul>
            </li>

        </div>
    </header>