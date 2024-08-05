<?php 
class product {
    private $db;

    public function __construct(){
        $this -> db =new Database();
    }
  
    public function show_cartegory(){
        $query ="SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result= $this -> db -> select($query);
        return $result;
    }
    public function insert_product(){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];
        $product_trademark=$_POST['product_trademark'];
        $product_price = $_POST['product_price'];
        $product_price_new = $_POST['product_price_new'];
        $product_desc = $_POST['product_desc'];
        $product_img = $_FILES['product_img']['name'];
        move_uploaded_file( $_FILES['product_img']['tmp_name'],"img/".$_FILES['product_img']['name']);
       

        $query = "INSERT INTO tbl_product(
        product_name,
        cartegory_id,
        product_trademark,
        product_price,
        product_price_new,
        product_desc,
        product_img
        ) 
        VALUE(
        '$product_name',
        '$cartegory_id',
        '$product_trademark',
        '$product_price',
        '$product_price_new',
        '$product_desc',
        '$product_img'
        )";
        $result=$this ->db->insert($query);
        return $result;
        
        // header('location:productlist.php');
    }

   












   

   

   /* public function get_cartegory($cartegory_id){
        $query ="SELECT * FROM tbl_cartegory WHERE cartegory_id =('$cartegory_id') ";
        $result= $this -> db -> select($query);
        return $result;
    }

    public function update_cartegory($cartegory_name,$cartegory_id){
        $query = "UPDATE tbl_cartegory SET cartegory_name='$cartegory_name' WHERE cartegory_id ='$cartegory_id' ";
        $result= $this -> db -> update($query);
        header('location:cartegorylist.php');
        return $result;
    }
    public function  delete_cartegory($cartegory_id){
        $query = "DELETE FROM tbl_cartegory WHERE cartegory_id ='$cartegory_id'";
        $result= $this -> db -> delete($query);
        header('location:cartegorylist.php');
        return $result;
    } */
}
?>