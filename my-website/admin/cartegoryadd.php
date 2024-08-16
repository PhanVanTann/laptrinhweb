<?php include "../includes/header.php";
include "slider.php";
include "../class/adminclass.php";
?>

<?php 
$cartegory = new admin;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_name=$_POST['cartegory_name'];
    $insert_cartegory = $cartegory -> insert_cartegory($cartegory_name);
}
?>




<div class="admin_right">
            <hr>
            <!--Thêm Loại Sản Phẩm  -->
            <div  class="admin_right_addCartegory">
                <h2>Thêm Loại Sản Phẩm</h2>
                <form action="" method="POST">
                    <input name="cartegory_name" type="text" placeholder="Thêm Loại Sản Phẩm" >
                    <br>
                    <button type="submit">Thêm</button>
                </form>
            </div>
            <hr>
                
</section>
    <section class="icons-conta"></section>
    <?php include "../includes/footer.php" ?>