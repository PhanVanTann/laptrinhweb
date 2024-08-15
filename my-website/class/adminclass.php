<?php
include "../config/database.php";

class admin {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function insert_cartegory($cartegory_name){
        $query = "INSERT INTO tbl_cartegory (cartegory_name) VALUES (?)";
        $params = [$cartegory_name];
        $types = "s"; 
        $this->db->insert($query, $params, $types); 
        header('location:cartegorylist.php');
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function delete_cartegory($cartegory_id){
        $query = "DELETE FROM tbl_cartegory WHERE cartegory_id = ?";
        $params = [$cartegory_id];
        $types = "i";
        $this->db->delete($query, $params, $types);      
        header('location:cartegorylist.php'); 
    }

    public function update_cartegory($cartegory_name, $cartegory_id){
        $query = "UPDATE tbl_cartegory SET cartegory_name = ? WHERE cartegory_id = ?";
        $params = [$cartegory_name, $cartegory_id];
        $types = "si"; 
        $this->db->update($query, $params, $types);
        header('location:cartegorylist.php');
    }

    public function get_cartegory($cartegory_id){
        $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = ?";
        $params = [$cartegory_id];
        $types = "i"; // "i" cho số nguyên (integer)
        $result = $this->db->select($query, $params, $types);
        return $result;
    }


    public function insert_product() {
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $product_trademark = $_POST['product_trademark'];
        $product_price = $_POST['product_price'];
        $product_price_new = $_POST['product_price_new'];
        $product_desc = $_POST['product_desc'];
    
        $upload_dir = '../uploads/uploads_product/';
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $uploaded_images = [];

      
    
        // Xử lý ảnh chính
        $product_img = $_FILES['product_img'];
        if ($product_img['error'] == UPLOAD_ERR_OK && in_array($product_img['type'], $allowed_types)) {
            $product_img_path = $upload_dir . basename($product_img['name']);
            if (move_uploaded_file($product_img['tmp_name'], $product_img_path)) {
                $uploaded_images['main'] = $product_img['name'];
            } else {
                die("Failed to upload main image.");
            }
        } else {
            die("Invalid main image or upload error.");
        }
    
        // Xử lý các ảnh mô tả
        for ($i = 1; $i <= 4; $i++) {
            $img_key = "product_img_mt" . $i;
            if (isset($_FILES[$img_key]) && $_FILES[$img_key]['error'] == UPLOAD_ERR_OK && in_array($_FILES[$img_key]['type'], $allowed_types)) {
                $img_path = $upload_dir . basename($_FILES[$img_key]['name']);
                if (move_uploaded_file($_FILES[$img_key]['tmp_name'], $img_path)) {
                    $uploaded_images[$img_key] = $_FILES[$img_key]['name'];
                } else {
                    die("Failed to upload $img_key.");
                }
            } else {
                die("Invalid $img_key or upload error.");
            }
        }
    
        // Câu lệnh SQL với placeholder
        $query = "INSERT INTO tbl_product (
            product_name,
            cartegory_id,
            product_trademark,
            product_price,
            product_price_new,
            product_desc,
            product_img,
            product_img_mt1,
            product_img_mt2,
            product_img_mt3,
            product_img_mt4
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        // Các tham số và loại dữ liệu
        $params = [
            $product_name, 
            $cartegory_id, 
            $product_trademark, 
            $product_price, 
            $product_price_new, 
            $product_desc, 
            $uploaded_images['main'] ?? '',
            $uploaded_images['product_img_mt1'] ?? '',
            $uploaded_images['product_img_mt2'] ?? '',
            $uploaded_images['product_img_mt3'] ?? '',
            $uploaded_images['product_img_mt4'] ?? ''
        ];
        $types = "sisddssssss"; // s: string, i: integer, d: double
    
        $this->db->insert($query, $params, $types);
    
        header('Location: productlist.php');
    }
    

    public function show_product() {
        $query = "SELECT * FROM tbl_product ORDER BY product_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_product($product_id){
        $query = "DELETE FROM tbl_product WHERE product_id = ?";
        $params = [$product_id];
        $types = "i";
        $this->db->delete($query, $params, $types);      
        header('location:productlist.php'); 
    }
    public function update_product($product_name, $product_id){
        $query = "UPDATE tbl_product SET product_name = ? WHERE product_id = ?";
        $params = [$product_name, $product_id];
        $types = "si"; 
        $this->db->update($query, $params, $types);
        header('location:productlist.php');
    }

    public function get_product($product_id){
        $query = "SELECT * FROM tbl_product WHERE product_id = ?";
        $params = [$product_id];
        $types = "i"; // "i" cho số nguyên (integer)
        $result = $this->db->select($query, $params, $types);
        return $result;
    }


}
?>
