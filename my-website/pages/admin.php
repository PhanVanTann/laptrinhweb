
<?php include "../includes/header.php"?>
<section class="icons-conta"> </section>
<section class="admin">
    <div class="admin_left">
        <div class="admin_left_img">
            <img src="anhr/gift.png">
            <h3>Phan Van Tan</h3>
        </div>
        <hr>
        <div class="admin_left_manageadmin">            
            <h2>Quản Lý Cửa Hàng</h2> 
            <ul>
                <li><a id="addCartegory" href="#">Thêm Loại Sản Phẩm</a></li>
                <li><a id="listCartegory" href="#">Danh Sách Loại Sản Phẩm</a></li>
                <li><a id="addProduct" href="#">Thêm Sản Phẩm</a></li>
                <li><a id="listProduct" href="#">Danh Sách Sản Phẩm</a></li>
            </ul> 
            <h2><a href="profile.php">Quản Lý Thông Tin Cá Nhân</a></h2>           
        </div>        
    </div>

    <div class="admin_right">
        <hr>
            <!--Thêm Loại Sản Phẩm  -->
            <div id="addCartegorySection" class="admin_right_addCartegory">
                <h2>Thêm Loại Sản Phẩm</h2>
                <input type="text" placeholder="Thêm Loại Sản Phẩm" >
                <button>Thêm</button>
            </div>
            <!--Danh Sách Loại Sản Phẩm  -->
            <div id="listCartegorySection" class="admin_right_listCartegory" style="display: none;">
                <h2>Danh Sách Loại Sản Phẩm</h2>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh Mục</th>
                        <th>Tùy Chọn</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>32</td>
                        <td>sữa tắm</td>
                        <td><a href="#">Sửa</a>|<a href="#">Xóa</a></td>
                    </tr>
                </table>
                
            </div>
             <!--Thêm Sản Phẩm  -->            
            <div id="addProductSection" class="admin_right_addProduct" style="display: none;">
                <h2>Thêm Sản Phẩm</h2>
                <form class="form_addProductSection" action="" method="post" enctype="multipart/form-data">
                    <label>Nhập Tên Sản Phẩm <span style="color:red;">*</span></label>
                    <input name="product_name" required type="text">
                    <label>Chọn Loại Sản Phẩm <span style="color:red;">*</span></label>
                    <select name="cartegory_id">
                        <option>--chọn--</option>
                    </select>
                    <label>Thương Hiệu<span style="color:red;">*</span></label>
                    <input name="product_trademark" required  type="text" >
                    <label>Giá Sản Phẩm<span style="color:red;">*</span></label>
                    <input name="product_price" required  type="text" >
                    <label>Khuyến mãi<span style="color:red;">*</span></label>
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

            <div id="listProductSection" class="admin_right_listProduct" style="display: none;">
                <h2>Danh Sách Sản Phẩm</h2>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>ID Sản Phẩm</th>
                        <th>ID Loại Sản Phẩm</th>
                        <td>Giá</td>
                        <th>Tùy Chọn</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>img</td>
                        <td>sữa tắm pro</td>
                        <td>32</td>
                        <td>32</td>
                        <td>32.000</td>
                        <td><a href="#">Sửa</a>|<a href="#">Xóa</a></td>
                    </tr>
                </table>
            </div>
        <hr>
    </div>

    
   
    
</section>
    <section class="icons-conta"></section>
    <?php include "../includes/footer.php" ?>