<?php include "../includes/header.php";
include "slider.php";

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
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $cartegory_id = $_POST['cartegory_id'];
    $product_trademark = $_POST['product_trademark'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];

    // Loại bỏ dấu phân cách hàng ngàn để chuyển đổi giá thành số
    $product_price = str_replace('.', '', $product_price);
    
    // Xử lý ảnh nếu có
    $product_img = !empty($_FILES['product_img']['name']) ? $_FILES['product_img']['name'] : $result['product_img'];
    $product_img_mt1 = !empty($_FILES['product_img_mt1']['name']) ? $_FILES['product_img_mt1']['name'] : $result['product_img_mt1'];
    $product_img_mt2 = !empty($_FILES['product_img_mt2']['name']) ? $_FILES['product_img_mt2']['name'] : $result['product_img_mt2'];
    $product_img_mt3 = !empty($_FILES['product_img_mt3']['name']) ? $_FILES['product_img_mt3']['name'] : $result['product_img_mt3'];
    
    // Cập nhật sản phẩm
    $product->update_product($product_name, $cartegory_id, $product_trademark, $product_price, $product_desc, $product_img, $product_img_mt1, $product_img_mt2, $product_img_mt3, $product_id);
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
                                while($row = $show_cartegory->fetch_assoc()){
                                    $selected = ($row['cartegory_id'] == $result['cartegory_id']) ? 'selected' : '';
                                    echo "<option value='{$row['cartegory_id']}' {$selected}>{$row['cartegory_name']}</option>";
                                }
                            }
                        ?>
                    </select>

                    <label>Thương Hiệu<span style="color:red;">*</span></label>
                    <input name="product_trademark" required type="text" value="<?php echo $result['product_trademark']?>">
                    
                    <label>Giá Sản Phẩm<span style="color:red;">*</span></label>
                    <?php
                        // Loại bỏ dấu chấm trong giá trị để chuyển đổi thành số
                        $product_price_numeric = str_replace('.', '', $result['product_price']);
                        // Chuyển đổi thành kiểu số
                        $product_price_numeric = (float) $product_price_numeric;
                        // Định dạng lại giá trị sau khi chuyển đổi
                        $formatted_price = number_format($product_price_numeric, 0, ',', '.');
                    ?>
                    <input name="product_price" required type="text" value="<?php echo $formatted_price; ?>">
                  
                    
                    <label>Chi Tiết Sản Phẩm<span style="color:red;">*</span></label>
                    <textarea name="product_desc" cols="30" rows="10"><?php echo $result['product_desc']; ?></textarea><br>
                    
                    <label>Ảnh Sản Phẩm<span style="color:red;">*</span></label>
                    <input name="product_img" type="file">
                    
                    <label>Ảnh Mô Tả<span style="color:red;">*</span></label>
                    <input name="product_img_mt1" type="file">
                    <input name="product_img_mt2" type="file">
                    <input name="product_img_mt3" type="file">
                    
                    <button type="submit">Sửa</button>
                </form>

            </div>

            <hr>
</section>     
            <?php include "../includes/footer.php" ?>