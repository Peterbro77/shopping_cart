<!-- delete logic -->

<!-- php code -->

<?php
include 'connect.php';
if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "Delete from `products` where id = $delete_id")
    or die('query failed');

    if($delete_query){
        header('location:view_products.php');
    }else{
        echo "products not deleted";
        header('location:view_products.php');
    }

}

?>