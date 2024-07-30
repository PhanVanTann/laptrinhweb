<?php 
include "..database.php"
?>

<?php 
class cartegory {
    private $db;

    public function __construct(){
        $this -> db =new Database();
    }

    public function insert_cartegory($cartegory_name){
        $query = "INSERT IN tbl_category(category_name) VALUE('$cartegory_name')";
        $result= $this -> db -> insert($query);
        return $result;
    }
}
?>