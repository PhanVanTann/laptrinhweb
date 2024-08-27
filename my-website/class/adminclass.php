<?php
include "../config/database.php";

class admin {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
    public function show_profile($userId){
        $query = "SELECT * FROM tbl_register WHERE user_id = ?";
        $params = [$userId];
        $types = "i"; // i: integer
        return $this->db->select($query, $params, $types);
    }

    public function get_user_profile($user_id) {
        $query = "SELECT fullname FROM tbl_register WHERE user_id = ?";
        $params = [$user_id];
        $types = "i"; // i cho số nguyên (integer)
        $result = $this->db->select($query, $params, $types);
        return $result;
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
        $trademark_id = $_POST['product_trademark'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
    
        $upload_dir = '../uploads/uploads_product/';
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
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
    
        // Xử lý ảnh mô tả
        for ($i = 1; $i <= 3; $i++) {
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
    
        // Lấy tên thương hiệu từ ID
        $query_trademark = "SELECT product_trademark FROM tbl_trademarks WHERE trademark_id = ?";
        $params_trademark = [$trademark_id];
        $trademark_result = $this->db->select($query_trademark, $params_trademark, "i");
        $trademark_name = $trademark_result->fetch_assoc()['product_trademark'];
    
        $product_price = str_replace('.', '', $product_price);
    
        $query = "INSERT INTO tbl_product (
            product_name,
            cartegory_id,
            product_trademark,
            product_price,
            product_desc,
            product_img,
            product_img_mt1,
            product_img_mt2,
            product_img_mt3
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        $params = [
            $product_name, 
            $cartegory_id, 
            $trademark_name, // Sử dụng tên thương hiệu
            $product_price, 
            $product_desc, 
            $uploaded_images['main'] ?? '',
            $uploaded_images['product_img_mt1'] ?? '',
            $uploaded_images['product_img_mt2'] ?? '',
            $uploaded_images['product_img_mt3'] ?? ''
        ];
        $types = "sisssssss";
    
        $this->db->insert($query, $params, $types);
        
        header('Location: productlist.php');
    }
    
    
    
    
    

    public function show_product() {
        $query = "SELECT * FROM tbl_product ORDER BY product_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_productid($product_id){
        $query = "SELECT * FROM tbl_product WHERE product_id = ?";       
        $result = $this->db->select($query, [$product_id], "i"); 
        return $result;
    }
    public function delete_product($product_id){
        $query = "DELETE FROM tbl_product WHERE product_id = ?";
        $params = [$product_id];
        $types = "i";
        $this->db->delete($query, $params, $types);      
        header('location:productlist.php'); 
    }
    public function update_product($product_name, $cartegory_id, $product_trademark, $product_price, $product_desc, $product_img, $product_img_mt1, $product_img_mt2, $product_img_mt3, $product_id) {
        $query = "UPDATE tbl_product SET 
            product_name = ?, 
            cartegory_id = ?, 
            product_trademark = ?, 
            product_price = ?, 
            product_desc = ?, 
            product_img = ?, 
            product_img_mt1 = ?, 
            product_img_mt2 = ?, 
            product_img_mt3 = ?
        WHERE product_id = ?";
        
        $params = [
            $product_name, 
            $cartegory_id, 
            $product_trademark, 
            $product_price, 
            $product_desc, 
            $product_img, 
            $product_img_mt1, 
            $product_img_mt2, 
            $product_img_mt3,
            $product_id
        ];
        $types = "sisssssssi"; // s: string, i: integer, d: double
        
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
//////////////////
    public function add_trademark( $product_trademark) {
        $query = "INSERT INTO tbl_trademarks (product_trademark) VALUES (?)";
        $params = [$product_trademark];
        $types = "s"; 
        $this->db->insert($query, $params, $types); 
            header('location:trademarkslist.php');
        }


    public function show_trademark(){
        $query = "SELECT * FROM tbl_trademarks ORDER BY trademark_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function delete_trademark($trademark_id){
        $query = "DELETE FROM tbl_trademarks WHERE trademark_id = ?";
        $params = [$trademark_id];
        $types = "i";
        $this->db->delete($query, $params, $types);      
        header('location:trademarkslist.php'); 
    }
    public function update_trademark($product_trademark, $trademark_id){
        $query = "UPDATE tbl_trademarks SET product_trademark = ? WHERE trademark_id = ?";
        $params = [$product_trademark, $trademark_id];
        $types = "si"; 
        $this->db->update($query, $params, $types);
        header('location:trademarkslist.php');
    }

    public function get_trademark($trademark_id){
        $query = "SELECT * FROM tbl_trademarks WHERE trademark_id = ?";
        $params = [$trademark_id];
        $types = "i"; // "i" cho số nguyên (integer)
        $result = $this->db->select($query, $params, $types);
        return $result;
    }
/////////////////////////

public function getFilteredProducts($cartegory_id = null, $trademark = null, $sort = null, $price_min = null, $price_max = null) {
    $query = "SELECT * FROM tbl_product WHERE 1=1"; // '1=1' để dễ dàng thêm điều kiện

    // Thêm điều kiện cho cartegory_id nếu có
    if ($cartegory_id !== null) {
        $query .= " AND cartegory_id = ?";
    }
    
    // Thêm điều kiện cho trademark nếu có
    if ($trademark !== null) {
        $query .= " AND product_trademark = ?";
    }
    
    // Thêm điều kiện cho giá nếu có
    if ($price_min !== null) {
        $query .= " AND product_price >= ?";
    }
    
    if ($price_max !== null) {
        $query .= " AND product_price <= ?";
    }
    
    // Thêm điều kiện sắp xếp dựa trên tham số $sort
    if ($sort === 'price_asc') {
        $query .= " ORDER BY product_price ASC";
    } elseif ($sort === 'price_desc') {
        $query .= " ORDER BY product_price DESC";
    } else {
        $query .= " ORDER BY product_id DESC"; // Sắp xếp mặc định
    }
    
    // Tạo mảng params và types tương ứng với các tham số lọc
    $params = [];
    $types = "";
    
    if ($cartegory_id !== null) {
        $params[] = $cartegory_id;
        $types .= "i"; // 'i' cho integer
    }
    
    if ($trademark !== null) {
        $params[] = $trademark;
        $types .= "s"; // 's' cho string
    }
    
    if ($price_min !== null) {
        $params[] = $price_min;
        $types .= "d"; // 'd' cho double
    }
    
    if ($price_max !== null) {
        $params[] = $price_max;
        $types .= "d"; // 'd' cho double
    }
    
    // Thực hiện truy vấn với các tham số và kiểu dữ liệu
    $result = $this->db->select($query, $params, $types);
    
    // Kiểm tra lỗi truy vấn
    if ($result === false) {
        die("Query failed.");
    }
    
    return $result;
}


    public function get_cart_items() {
        $query = "SELECT * FROM tbl_cart";
        return $this->db->select($query);
    }

    public function get_cart_items_by_user_id($user_id) {
        $query = "SELECT * FROM tbl_cart WHERE user_id = ?";
        return $this->db->select($query, [$user_id], "i");
    }
   
    public function delete_from_cart($product_id) {
        $query = "DELETE FROM tbl_cart WHERE product_id = ?";
        $params = [$product_id];
        $types = "i";
        $this->db->delete($query, $params, $types);
    }
    
    public function insert_cart_item($user_id, $product_id, $product_img, $product_name, $product_price, $product_quanlity) {
        $sum_price = $product_price * $product_quanlity;
    
        $query = "INSERT INTO tbl_cart (
            user_id,
            product_id,
            product_img,
            product_name,
            product_price,
            product_quanlity,
            sum_price
        ) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
        $params = [
            $user_id,
            $product_id,
            $product_img,
            $product_name,
            $product_price,
            $product_quanlity,
            $sum_price
        ];
        $types = "iisssii";
    
        $this->db->insert($query, $params, $types);
    }

    public function show_profileincart($user_id) {
        $query = "SELECT fullname, phone, deliveryaddress FROM tbl_register WHERE user_id = ?";
        $result = $this->db->select($query, [$user_id], "i");

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function show_cartinpayment($cart_id) {
        $query = "SELECT product_name, product_quanlity, product_price FROM tbl_cart WHERE cart_id = ?";
        $result = $this->db->select($query, [$cart_id], "i");

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
    
     
  
    public function getAllOrders() {
        $query = "SELECT * FROM tbl_order";
        return $this->db->select($query);
    }

    // Lấy chi tiết đơn hàng dựa trên order_id
    public function getOrderDetails($order_id) {
        $query = "SELECT product_name, product_quanlity, product_price, (product_price * product_quanlity) AS sum_price 
                  FROM tbl_productdesc WHERE order_id = ?";
        return $this->db->select($query, [$order_id], 'i');
    }
}
?>
