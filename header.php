<!-- header -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<header class="header">
    <div class="header_body">
        <a href="index.php" class="logo">ToGoTrain</a>
        <nav class="navbar">
            <a href = "frontPage.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" d="M22 22H2m0-11l4.063-3.25M22 11l-8.126-6.5a3 3 0 0 0-3.748 0l-.782.625M15.5 5.5v-2A.5.5 0 0 1 16 3h2.5a.5.5 0 0 1 .5.5v5M4 22V9.5m16 0v4m0 8.5v-4.5"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 22v-5c0-1.414 0-2.121-.44-2.56C14.122 14 13.415 14 12 14c-1.414 0-2.121 0-2.56.44M9 22v-5"/>
            <path d="M14 9.5a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"/></g></svg></a>
            <!-- <a href="index.php">Add Products</a>
            <a href="view_products.php">View Products</a> -->
            <a href="shop_products.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M8.1 13.34L3.91 9.16a4.01 4.01 0 0 1 0-5.66l7.02 7zm6.78-1.81L13.41 13l6.88 6.88l-1.41 1.41L12 14.41l-6.88 6.88l-1.41-1.41l9.76-9.76c-.71-1.53-.21-3.68 1.38-5.27c1.91-1.92 4.65-2.28 6.11-.82c1.47 1.47 1.11 4.21-.81 6.12c-1.59 1.59-3.74 2.09-5.27 1.38"/></svg></a>
        </nav>
        <!-- select query -->
        <?php
        
        $select_product = mysqli_query($conn, "select* from `cart`") or die('query failed');
        $row_count = mysqli_num_rows($select_product);
        
        
        ?>


        <!-- shopping cart Icon -->
        <a href="cart.php" class="cart"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                <path fill="currentColor" d="M233.21 56.31A12 12 0 0 0 224 52H66l-5.47-30.15A12 12 0 0 0 48.73 12H24a12 12 0 0 0 0 24h14.71l24.91 137a28 28 0 0 0 4.07 10.21A32 32 0 1 0 123 196h34a32 32 0 1 0 31-24H91.17a4 4 0 0 1-3.93-3.28L84.92 156H196.1a28 28 0 0 0 27.55-23l12.16-66.86a12 12 0 0 0-2.6-9.83M100 204a8 8 0 1 1-8-8a8 8 0 0 1 8 8m88 8a8 8 0 1 1 8-8a8 8 0 0 1-8 8m12-83.28a4 4 0 0 1-3.9 3.28H80.56L70.38 76h139.24Z" />
            </svg><span><sup><?php echo $row_count ?></sup></span></a>
        <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
    </div>

</header>