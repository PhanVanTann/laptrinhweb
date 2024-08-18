<?php 
include "../class/adminclass.php";

$trademark = new admin;
if(!isset($_GET['trademark_id']) ||$_GET['trademark_id']==NULL){
    echo "<script>window.location='trademarkslist.php'</script>";  
}
else{
    $trademark_id=$_GET['trademark_id'];
}
$delete_trademark=$trademark -> delete_trademark($trademark_id);

?>