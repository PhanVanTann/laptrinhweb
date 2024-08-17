<?php include "../includes/header.php";
include "slider.php";

?>

<?php
$product = new admin;
$show_product = $product->show_product();
?>
<?php
$cartegory = new admin;
$show_cartegory = $cartegory->show_cartegory();
?>

<div  class="admin_right_listProduct" >
                <h2>Danh Sách Sản Phẩm</h2>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>ID Sản Phẩm</th>
                        <th>ID Loại Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Tùy Chọn</th>
                    </tr>
                    <?php
                        $i = 0;
                        if ($show_product) {
                            while ($result = $show_product->fetch_assoc()) {
                                $i++;


                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><img src="../uploads/uploads_product/<?php echo $result['product_img']?>"></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td>
                            <?php
                                // Loại bỏ dấu chấm trong giá trị để chuyển đổi thành số
                                $product_price_numeric = str_replace('.', '', $result['product_price']);
                                // Chuyển đổi thành kiểu số
                                $product_price_numeric = (float) $product_price_numeric;
                                // Định dạng lại giá trị sau khi chuyển đổi
                                $formatted_price = number_format($product_price_numeric, 0, ',', '.');
                                // Hiển thị giá trị đã định dạng
                                echo $formatted_price;
                            ?>
                        </td>
                        <td><a href="productedit.php?product_id=<?php echo $result['product_id'] ?>">Sửa</a>|<a href="productdelete.php?product_id=<?php echo $result['product_id']; ?>">xóa</a></td>
                    </tr>
                    <?php
                    
                            }
                        }
                        ?>
                </table>
            </div>
        <hr>

</section>
    <section class="icons-conta"></section>
    <?php include "../includes/footer.php" ?>