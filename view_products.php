<!-- including php logic- connecting to database -->
<?php include 'connect.php' ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View products-project</title>
<!-- CSS file -->
    <link rel="stylesheet" href="css/style.css">

    <!-- font awesome link -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <?php
    include 'header.php'
    ?>

    <!-- container -->
    <div class="container">
        <section class="display_product">
           
                    <!-- php code -->
                    <?php
                    $display_product=mysqli_query($conn,"select * from `products`");
                    $num=1;
                    if(mysqli_num_rows($display_product)>0){
                       echo  "<table>
                        <thead>
                            <th>Sl no</th>
                            <th>Product image</th>
                            <th>Product name</th>
                            <th>Product price</th>
                            <th>Action</th>
                        </thead>
                        <tbody>";
                        //logic to fetch data

                        while($row=mysqli_fetch_assoc($display_product)){
                            $product_name = $row['name']
                            ?>
                        
                        <!-- display table -->
                        <tr>
                        <td><?php echo $num ?></td>
                        <td><img src = "images/<?php echo $row['image']?>" alt=<?php echo $product_name ?>></td>
                        <td><?php echo $product_name ?></td>
                        <td><?php echo $row['price']?></td>
                        <td>
                            <a href="delete.php?delete=<?php echo $row['id']?>" class = "delete_product_btn" onclick="return confirm('Are you sure you wanna delete this item')">
                            <i class = "fa fas fa-trash"></i></a>
                            <a href="update.php?edit=<?php echo $row['id']?>" class = "update_product_btn">
                                <i class = "fa fas fa-edit"></i></a>
                        </td>
                    </tr>

                        <?php
                        $num++;
                        }
                    }else{
                        echo "<div class = 'empty_text'>No items available</div>";
                    }
                    ?>
                    
                </tbody>
            </table>
        </section>
    </div>

</body>
</html>