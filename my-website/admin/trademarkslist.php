
<?php include "../includes/header.php";
include "slider.php";

?>
<?php
$trademark = new admin;
$show_trademark = $trademark->show_trademark();
?>
<div class="admin_right">
    <div class="admin_right_listCartegory" >
    <hr>
                <h2>Danh Sách Thương Hiệu</h2>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID Thương Hiệu</th>
                        <th>Thương Hiệu</th>
                        <th>Tùy Chọn</th>
                    </tr>
                    <?php
                        $i = 0;
                        if ($show_trademark) {
                            while ($result = $show_trademark->fetch_assoc()) {
                                $i++;


                    ?>
                    <tr>
                    <td><?php echo $i ?></td>
                        <td><?php echo $result['trademark_id'] ?></td>
                        <td><?php echo $result['product_trademark'] ?></td>
                        <td><a href="trademarksedit.php?trademark_id=<?php echo $result['trademark_id'] ?>">Sửa</a>|<a href="trademarksdelete.php?trademark_id=<?php echo $result['trademark_id']; ?>">xóa</a></td>
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