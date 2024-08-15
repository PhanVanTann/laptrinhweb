<?php include "../includes/header.php";
include "slider.php";
include "../class/adminclass.php";
?>

<?php 
 $product = new admin;
if(!isset($_GET['product_id']) ||$_GET['product_id']==NULL){
   // echo "<script>window.location='productlist.php'</script>";  
}
else{
    $product_id=$_GET['product_id'];
}
$get_product=$product -> get_product($product_id);
if($get_product){
    $result=$get_product -> fetch_assoc();
}
?>

<?php
  
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $product_name=$_POST['product_name'];
        $update_product = $product -> update_product($product_name,$product_id);
    }
?>



<div class="admin_right">


<div  class="admin_right_addProduct" >
                <h2>Thêm Sản Phẩm</h2>
                <form class="form_addProductSection" action="" method="post" enctype="multipart/form-data">
                    <label>Nhập Tên Sản Phẩm <span style="color:red;">*</span></label>
                    <input name="product_name" required type="text" value="<?php echo $result['product_name']?>">
                    <label>Chọn Loại Sản Phẩm <span style="color:red;">*</span></label>
                    <select name="cartegory_id">
                        <option>--chọn--</option>
                        <?php 
                            $show_cartegory = $product->show_cartegory();
                            if($show_cartegory){
                                while($row=$show_cartegory->fetch_assoc()){
                                    $selected = ($row['cartegory_id'] == $result['cartegory_id']) ? 'selected' : '';
                                    echo "<option value='{$row['cartegory_id']}' {$selected}>{$row['cartegory_name']}</option>";
                                }
                            }
                        ?>
                    </select>
                    <label>Thương Hiệu<span style="color:red;">*</span></label>
                    <input name="product_trademark" required  type="text" value="<?php echo $result['product_trademark']?>">
                    <label>Giá Sản Phẩm<span style="color:red;">*</span></label>
                    <input name="product_price" required  type="text" value="<?php echo $result['product_price']?>">
                    <label>Khuyến mãi<span style="color:red;">*</span></label>
                    <input name="product_price_new" required  type="text" value="<?php echo $result['product_price_new']?>">
                    <label>Chi Tiết Sản Phẩm<span style="color:red;">*</span></label>
                    <textarea name="product_desc" cols="30" rows="10"><?php echo $result['product_desc']?></textarea><br>
                    <label>Ảnh Sản Phẩm<span style="color:red;">*</span></label>
                    <input name="product_img" required type="file" >
                    <label>Ảnh Mô Tả<span style="color:red;">*</span></label>
                    <input name="product_img_mt1" required type="file" >
                    
                    <input name="product_img_mt2" required type="file" >
                    
                    <input name="product_img_mt3" required type="file">
                    
                    <input name="product_img_mt4" required  type="file" >
                    <button type="submit">Sửa</button>
                </form>
            </div>

            <hr>
</section>     
            <?php include "../includes/footer.php" ?>