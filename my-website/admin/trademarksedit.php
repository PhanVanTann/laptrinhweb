

<?php include "../includes/header.php";
include "slider.php";

?>

<?php 
 $trademark = new admin;
if(!isset($_GET['trademark_id']) ||$_GET['trademark_id']==NULL){
   // echo "<script>window.location='trademarklist.php'</script>";  
}
else{
    $trademark_id=$_GET['trademark_id'];
}
$get_trademark=$trademark -> get_trademark($trademark_id);
if($get_trademark){
    $result=$get_trademark -> fetch_assoc();
}
?>

<?php
  
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $product_trademark=$_POST['product_trademark'];
        $update_trademark = $trademark -> update_trademark($product_trademark,$trademark_id);
    }
?>




<div class="admin_right">
            <hr>
            <!--Thêm Loại Sản Phẩm  -->
            <div  class="admin_right_addCartegory">
                <h2>Thêm Thương Hiệu</h2>
                <form action="" method="POST">
                    <input name="product_trademark" type="text" placeholder="Thêm Loại Sản Phẩm" value="<?php echo $result['product_trademark']?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
            <hr>
</section>
    <section class="icons-conta"></section>
    <?php include "../includes/footer.php" ?>