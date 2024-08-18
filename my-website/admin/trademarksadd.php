<?php include "../includes/header.php";
include "slider.php";

?>

<?php 
$trademarks = new admin;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $trademarks_name=$_POST['trademarks_name'];
    $insert_trademarks = $trademarks -> add_trademark($trademarks_name);
}
?>




<div class="admin_right">
            <hr>
            <!--Thêm Loại Sản Phẩm  -->
            <div  class="admin_right_addCartegory">
                <h2>Thêm Thương Hiệu</h2>
                <form action="" method="POST">
                    <input name="trademarks_name" type="text" placeholder="Thêm Loại Sản Phẩm" >
                    <button type="submit">Thêm</button>
                </form>
            </div>
            <hr>
                
</section>
    <section class="icons-conta"></section>
    <?php include "../includes/footer.php" ?>