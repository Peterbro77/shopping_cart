<?php include 'connect.php';
if(isset($_POST['add_product'])){
    $product_name=$_POST['product_name'];
    $product_price=$_POST['product_price'];
    $product_image=$_FILES['product_image']['name'];
    $product_image_tmp_name=$_FILES['product_image']['tmp_name'];
    $product_image_folder='images/'.$product_image;

    $insert_query=mysqli_query($conn, "insert into `products` (name,price,image) values
    ('$product_name', '$product_price', '$product_image')") or die("Inserst quesry failed");
    if($insert_query){
        move_uploaded_file($product_image_tmp_name,$product_image_folder);
        $display_message= "Product inserted successfully";
    }else{
        $display_message= "Insertion error";
    }

}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>

    <!-- css file -->
    <link rel = "stylesheet" href = "css/style.css">

    <!-- font awesome link -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<!-- including header -->
<?php include('header.php') ?>

<!-- form section -->
<div class="container">
    <!-- message display -->
    <?php
    if(isset($display_message)){
        echo "<div class='display_message'>
        <span>$display_message</span>
        <i class = 'fa fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
    </div>";
    }
    
    ?>
   
    <section>
        <h3 class = "heading">Add Product</h3>
        <form action="" class="add_product" method="post" enctype="multipart/form-data">
            <input type="text" name="product_name" placeholder="Enter product Name" class="input_fields" required>
            <input type="number" name="product_price" min="0" placeholder="Enter product price" class="input_fields" required>
            <input type="file" name="product_image" class="input_fields" required accept="image/png, image/jpg, image/jpeg">
            <input type="submit" name="add_product" class="submit_btn" value = "Add Product">
        </form>

    </section>

</div>

<!-- js file -->
<script src="js/script.js"></script>
</body>
</html>