<?php 
include "header.php";
include "slider.php";

?>




<?php
    $cartegory = new cartegory;
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $cartegory_name=$_POST['cartegory_name'];
        $insert_cartegory = $cartegory -> insert_cartegory($cartegory_name);
    }
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm Loại Sản Phẩm</h1>
                <form action="" method="POST">
                    <input required name="cartegory_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>