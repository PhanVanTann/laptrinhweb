
<?php include "../includes/header.php";
include "slider.php";
include "../class/adminclass.php";
?>
<?php
$cartegory = new admin;
$show_cartegory = $cartegory->show_cartegory();
?>
<div class="admin_right">
    <div class="admin_right_listCartegory" >
    <hr>
                <h2>Danh Sách Loại Sản Phẩm</h2>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh Mục</th>
                        <th>Tùy Chọn</th>
                    </tr>
                    <?php
                        $i = 0;
                        if ($show_cartegory) {
                            while ($result = $show_cartegory->fetch_assoc()) {
                                $i++;


                    ?>
                    <tr>
                    <td><?php echo $i ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td><?php echo $result['cartegory_name'] ?></td>
                        <td><a href="cartegoryedit.php?cartegory_id=<?php echo $result['cartegory_id'] ?>">Sửa</a>|<a href="cartegorydelete.php?cartegory_id=<?php echo $result['cartegory_id']; ?>">xóa</a></td>
                    </tr>
                    <?php
                    
                            }
                        }
                        ?>
                </table>
                
            </div>
            <hr>
            </section>     
            <?php include "../includes/footer.php" ?>