<?php 
class cartegory {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function insert_cartegory($cartegory_name){
        $query = "INSERT INTO tbl_cartegory (cartegory_name) VALUES (?)";
        $params = [$cartegory_name];
        $types = "s"; // "s" cho chuỗi (string)
        $this->db->insert($query, $params, $types);
        header('location:cartegorylist.php');
    }

    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function get_cartegory($cartegory_id){
        $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = ?";
        $params = [$cartegory_id];
        $types = "i"; // "i" cho số nguyên (integer)
        $result = $this->db->select($query, $params, $types);
        return $result;
    }

    public function update_cartegory($cartegory_name, $cartegory_id){
        $query = "UPDATE tbl_cartegory SET cartegory_name = ? WHERE cartegory_id = ?";
        $params = [$cartegory_name, $cartegory_id];
        $types = "si"; // "s" cho chuỗi (string), "i" cho số nguyên (integer)
        $this->db->update($query, $params, $types);
        header('location:cartegorylist.php');
    }

    public function delete_cartegory($cartegory_id){
        $query = "DELETE FROM tbl_cartegory WHERE cartegory_id = ?";
        $params = [$cartegory_id];
        $types = "i"; // "i" cho số nguyên (integer)
        $this->db->delete($query, $params, $types);
        header('location:cartegorylist.php');
    } 
}
?>
