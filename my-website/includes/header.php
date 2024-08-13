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

</head>
<body>
    <header>
        <input type="checkbox" name="" id="toggler">
       <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">flower <span>.</span></a>

        <nav class="navbar">
            <a href = "#home">home</a>
            <a href = "cartegory.html">products</a>
            <a href="profile.html">Profile</a>
            <a href="#">Cart</a>         
        </nav>
        

        <div class="icons login">
            <a href="../pages/login.php" id="login">Login</a>
            <a href="#" id="logout" style="display: none;">Logout</a>
        </div>
    </header>
<?php include "footer.php"?>

