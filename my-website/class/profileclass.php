<?php
include "../config/database.php";

class profile {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

   public function show_profile(){
    $query = "SELECT * FROM tbl_register ORDER BY user_id DESC";
    $result = $this->db->select($query);
    return $result;
   }

   public function update_profile($userId, $fullname, $phone,$email, $address) {
    $query = "UPDATE tbl_register SET fullname = ?, phone = ?,email=?, deliveryaddress = ? WHERE user_id = ?";
    $params = [$fullname, $phone,$email, $address, $userId];
    $types = "ssssi"; // s: string, i: integer
    return $this->db->update($query, $params, $types);
    }

    public function update_password($userId,$passwords){
        $query = "UPDATE tbl_register SET passwords=? WHERE user_id=?";
        $params = [$passwords,$userId];
        $type = "si";
        return $this->db->update($query,$params,$type);
    }

  
}
?>
