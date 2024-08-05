<?php 
class product {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function insert_product(){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $product_trademark = $_POST['product_trademark'];
        $product_price = $_POST['product_price'];
        $product_price_new = $_POST['product_price_new'];
        $product_desc = $_POST['product_desc'];

        // Xử lý tệp tin upload
        $product_img = $_FILES['product_img']['name'];
        $product_img_tmp = $_FILES['product_img']['tmp_name'];
        $upload_dir = 'img/';
        $upload_file = $upload_dir . basename($product_img);
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

        if (in_array($_FILES['product_img']['type'], $allowed_types)) {
            if (move_uploaded_file($product_img_tmp, $upload_file)) {
                // Tệp tin đã được upload thành công
            } else {
                die("File upload failed");
            }
        } else {
            die("Invalid file type");
        }

        // Câu lệnh SQL với placeholder
        $query = "INSERT INTO tbl_product (
            product_name,
            cartegory_id,
            product_trademark,
            product_price,
            product_price_new,
            product_desc,
            product_img
        ) VALUES (?, ?, ?, ?, ?, ?, ?)";

        // Các tham số và loại dữ liệu
        $params = [$product_name, $cartegory_id, $product_trademark, $product_price, $product_price_new, $product_desc, $product_img];
        $types = "sisddss"; // s: string, i: integer, d: double

        $this->db->insert($query, $params, $types);

        header('location:productlist.php');
    }
}
?>
