<?php include 'connect.php';
// update query
if(isset($_POST['update_product_quantity'])){
    $update_value = $_POST['update_quantity'];
    // echo $update_value;
    $update_id = $_POST['update_quantity_id'];
    // echo $update_id;
    //query
    $update_quantity_query = mysqli_query($conn, "update `cart` set quantity =$update_value where id = $update_id");
    if($update_quantity_query){
        header('location:cart.php');
    }

}

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    // echo $remove_id;
    mysqli_query($conn, "delete from `cart` where id = $remove_id");
    header('location:cart.php');
}

if(isset($_GET['delete_all'])){
    mysqli_query($conn, "delete from `cart`");
    header('location:cart.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart page</title>
     <!-- css file -->
     <link rel = "stylesheet" href = "css/style.css">

<!-- font awesome link -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <!-- including header -->
    <?php include 'header.php'; ?>

    <div class="container">
        <section class="shopping_cart">
            <h1 class="heading">your Cart</h1>
            <table>
                <?php
                $select_cart_products = mysqli_query($conn, "select* from `cart`");
                $num = 1;
                $grand_total = 0;
                if(mysqli_num_rows($select_cart_products)>0){
                    echo"<thead>
                    <th>Sl no</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </thead>
                <tbody>";
                while($fetch_cart_products = mysqli_fetch_assoc($select_cart_products)){
                    ?>

<tr>
                        <td><?php echo $num?></td>
                        <td><?php echo $fetch_cart_products['name']?></td>
                        <td>
                            <img src = "images/<?php echo $fetch_cart_products['image_name']?>" alt = "agskra">
                        </td>
                        <td>$<?php
                        $price = number_format($fetch_cart_products['price']); echo $price; ?>/-</td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" value = "<?php echo $fetch_cart_products['id']?>" name = "update_quantity_id">
                        <div class="quantity_box">
                                <input type="number" min = '1' value = '<?php echo $fetch_cart_products['quantity']?>' name = "update_quantity">
                                <input type="submit" class = "update quantity" value = "update" name = "update_product_quantity">
                        </div>
                        </form>
                                
                        </td>
                        <td>$<?php $subtotal = number_format($fetch_cart_products['price']*$fetch_cart_products['quantity']); echo $subtotal; ?></td>
                        <td>
                            <a href="cart.php?remove=<?php echo $fetch_cart_products['id']?>"onclick = "return confirm('Are you sure?')">
                                <i class = "fa fas fa-trash"></i>
                        </td>
                    </tr>
                <?php
                $grand_total = $grand_total+($fetch_cart_products['price']*$fetch_cart_products['quantity']);
                $num++;
                }

                $grand_total = number_format($grand_total);
                }else{
                    echo"<div class = 'empty_text'> cart is empty</div>";
                }
                
                ?>
                
                    
                </tbody>
            </table>
            <!-- bottom area -->
            <?php
            if($grand_total>0){
                echo "<div class='table_bottom'>
                <a href='shop_products.php' class = 'bottom_btn'>Continue Shopping</a>
                <h3 class='bottom_btn'>Grand Total: $<span>$grand_total/-</span></h3>
                <a href='checkout.php' class = 'bottom_btn'>checkout</a>
            </div>";
            
            ?>

            <center><a href="cart.php?delete_all" class = "delete_all_btn">
                <i class="fa fas fa-trash"></i>Clear Cart</a>
            </a>
            </center>
            <?php
            }else{
                echo"";
            }
            
            ?>
        </section>
    </div>

    
    
</body>
</html>