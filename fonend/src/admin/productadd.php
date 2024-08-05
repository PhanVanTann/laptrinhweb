<?php 
include "header.php";
include "slider.php";


?>


<?php 
  
     $product = new product;
     if($_SERVER['REQUEST_METHOD']==='POST'){
  
         $insert_product = $product -> insert_product($_POST,$_FILES);
     }
?>

<div class="admin-content-right">
    <div class="admin-content-right-product_add">
                        <h1>Thêm Sản Phẩm</h1>
                        <form action="" method="post" enctype="multipart/form-data">
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
                            <label>Thương Hiệu<span style="color:red;">*</span></label>
                            <input name="product_trademark" required  type="text" >
                            <label>Giá Sản Phẩm<span style="color:red;">*</span></label>
                            <input name="product_price" required  type="text" >
                            <label>Giá Khuyến mãi<span style="color:red;">*</span></label>
                            <input name="product_price_new" required  type="text" >
                            <label>Chi Tiết Sản Phẩm<span style="color:red;">*</span></label>
                            <textarea name="product_desc" cols="30" rows="10" ></textarea><br>
                            <label>Ảnh Sản Phẩm<span style="color:red;">*</span></label>
                            <input name="product_img" required type="file">
                            <label>Ảnh Mô Tả<span style="color:red;">*</span></label>
                            <input name="product_img_desc" multiple required type="file">
                            <button type="submit">Thêm</button>
                        </form>
                    </div>
                </div>

            </section>
    
</body>
</html>