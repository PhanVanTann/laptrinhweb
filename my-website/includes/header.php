<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/3a92867321.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">   
    <link rel="stylesheet" href="../assets/css/home.css">  
    <link rel="stylesheet" href="../assets/css/product.css">  
    <link rel="stylesheet" href="../assets/css/cartegory.css">  
    <link rel="stylesheet" href="../assets/css/profile.css">  
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link rel="stylesheet" href="../assets/css/admin.css">

    
    <script src="../assets/js/home.js"></script> 
    <script src="../assets/js/admin.js"></script>
   
    <script src="../assets/js/cart.js"></script>
    
</head>
<?php 
session_start();
$userRole = $_SESSION['roles'] ?? 0; 
$isUser = $userRole == 0;
?>
 <header>
        <input type="checkbox" name="" id="toggler">
       <label for="toggler" class="fas fa-bars"></label>

        <a href="../pages/home.php" class="logo">Eyewear <span>.</span></a>

        <nav class="navbar">
            <a href = "../pages/home.php">home</a>
            <a href = "../pages/cartegory.php">products</a>
            <a href="../pages/profile.php">Profile</a>
            <?php if ($isUser): ?>
            <a href="../pages/cart.php">Cart</a> 
            <?php endif;?>        
        </nav>
        

        <div class="icons login">
            <a href="../pages/login.php" id="login">Login</a>
            <a href="#" id="logout" style="display: none;">Logout</a>
        </div>
    </header>


