<?php
include "../config/database.php";

class profile {
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


   public function update_profile($userId, $fullname, $phone,$email, $address,$passwords) {
    $query = "UPDATE tbl_register SET fullname = ?, phone = ?,email=?, deliveryaddress = ?, passwords=? WHERE user_id = ?";
    $params = [$fullname, $phone,$email, $address,$passwords, $userId];
    $types = "sssssi"; // s: string, i: integer
    return $this->db->update($query, $params, $types);
    }

}
?>
