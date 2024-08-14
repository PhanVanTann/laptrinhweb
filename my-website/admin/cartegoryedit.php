

<?php include "../includes/header.php";
include "slider.php";
include "../class/adminclass.php";
?>

<?php 
 $cartegory = new admin;
if(!isset($_GET['cartegory_id']) ||$_GET['cartegory_id']==NULL){
   // echo "<script>window.location='cartegorylist.php'</script>";  
}
else{
    $cartegory_id=$_GET['cartegory_id'];
}
$get_cartegory=$cartegory -> get_cartegory($cartegory_id);
if($get_cartegory){
    $result=$get_cartegory -> fetch_assoc();
}
?>

<?php
  
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $cartegory_name=$_POST['cartegory_name'];
        $update_cartegory = $cartegory -> update_cartegory($cartegory_name,$cartegory_id);
    }
?>




<div class="admin_right">
            <hr>
            <!--Thêm Loại Sản Phẩm  -->
            <div  class="admin_right_addCartegory">
                <h2>Thêm Loại Sản Phẩm</h2>
                <form action="" method="POST">
                    <input name="cartegory_name" type="text" placeholder="Thêm Loại Sản Phẩm" >
                    <button type="submit">Sửa</button>
                </form>
            </div>>
                
</section>
    <section class="icons-conta"></section>
    <?php include "../includes/footer.php" ?>