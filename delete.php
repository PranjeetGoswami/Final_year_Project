<?php
require 'config.php';
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn,"Delete from `products` where id=$delete_id") or die("Query failed");
    if($delete_query){
        echo "Product Deleted";
        header('Location: view.php');
    }else{
        echo "Product not Deleted";
        header('location: view.php');
    }
}
?>