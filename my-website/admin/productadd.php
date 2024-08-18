<?php include "../includes/header.php";
include "slider.php";

?>
<?php 
  
  $product = new admin;
  if($_SERVER['REQUEST_METHOD']==='POST'){

      $insert_product = $product -> insert_product($_POST,$_FILES);
  }
?>
<div class="admin_right">


<div  class="admin_right_addProduct" >
                <h2>Thêm Sản Phẩm</h2>
                <form class="form_addProductSection" action="" method="post" enctype="multipart/form-data">
                    <label>Nhập Tên Sản Phẩm <span style="color:red;">*</span></label>
                    <input name="product_name" required type="text">
                    <label>Chọn Loại Sản Phẩm <span style="color:red;">*</span></label>
                    <select name="cartegory_id">
                        <option>--chọn--</option>
                        <?php 
                                    $show_cartegory = $product -> show_cartegory();
                                    if($show_cartegory){
                                    while($result=$show_cartegory->fetch_assoc()){
                                ?>
                                <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                                <?php 
                                    }
                                }
                                ?>
                    </select>
                    <label>Chọn Thương Hiệu <span style="color:red;">*</span></label>
                        <select name="product_trademark">
                            <option value="">--Chọn--</option>
                            <?php 
                                $show_trademark = $product->show_trademark();
                                if ($show_trademark) {
                                    while ($result = $show_trademark->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $result['trademark_id']; ?>"><?php echo $result['product_trademark']; ?></option>
                            <?php 
                                    }
                                }
                            ?>
                        </select>
                    
                    <label>Giá Sản Phẩm<span style="color:red;">*</span></label>
                    <input name="product_price" required  type="text" >
                    <label>Chi Tiết Sản Phẩm<span style="color:red;">*</span></label>
                    <textarea name="product_desc" cols="30" rows="10" ></textarea><br>
                    <label>Ảnh Sản Phẩm<span style="color:red;">*</span></label>
                    <input name="product_img" required type="file">
                    <label>Ảnh Mô Tả<span style="color:red;">*</span></label>
                    <input name="product_img_mt1" required type="file">
                    
                    <input name="product_img_mt2" required type="file">
                    
                    <input name="product_img_mt3" required type="file">
                    
                  
                    <button type="submit">Thêm</button>
                </form>
            </div>

            <hr>
</section>     
            <?php include "../includes/footer.php" ?>