<?php 
    include "header.php";
    include "slider.php";
    include "class/productclass.php"; 
?>

<?php
$product = new product;
$show_product = $product->show_product();
?> 

<div class="admin-content-right">
    <div class="admin-content-right-product_list"></div>
        <h1>Danh Sách Sản Phẩm</h1>
        <table>
            <tr>
                <th>stt</th>
                <th>ID Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>ID Loại Sản Phẩm</th>
                <th>Giá</th>
                <th>Giá Khuyến Mãi</th>
                <th>Hình Ảnh</th>
            </tr>
            <?php 
                $i=0;
                if($show_product){
                    while ($result = $show_product->fetch_assoc()){
                        $i++;
            ?>            
                <tr>
                    <td><?php echo $i?></td>    
                    <td><?php echo $result['product_id']?></td>  
                    <td><?php echo $result['product_name']?></td>  
                    <td><?php echo $result['cartegory_id']?></td>  
                    <td><?php echo $result['product_price']?></td>  
                    <td><?php echo $result['product_price_new']?></td>  
                    
                        
                </tr>





            <?php            

                    }
                }

            ?>
        </table>
</div>