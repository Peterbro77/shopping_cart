<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Snack.png" type="image/x-icon">
    <title>ToGoTrain</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Jersey+25+Charted&family=Pacifico&family=Poetsen+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
    overflow: hidden;
}

.bg-img {
    position: absolute;
    top: 21.5%;
    left: 0;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat ;
    background-size: cover;
    /* background-position: center; */
    animation: changeBackground 20s infinite linear;
}

@keyframes changeBackground {
    0% { background-image: url(No.jpg); }
    25% { background-image: url(People.jpg); }
    50% { background-image: url(No.jpg); }
    75% { background-image: url(People.jpg); }
    100% { background-image: url(No.jpg); }
}

.header {
    height: 20%;
    background-color: #F4D9C4;
    padding: 10px 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: solid 3px #423000;
}

header img{
    width: 130px;
    height: 130px;
}

nav{
    width: 30%;
}

.nav-links1 {
    display: flex;
    align-items: center;
    justify-content: space-between;
    list-style: none;
    padding: 12px 25px;
    border-radius: 5px;
    cursor: pointer;

}

.nav-links1 li {
    list-style: none;
    background-color: #fecaa8;
    color: #b74b00;
    padding: 12px 25px;
    border: solid #423000;
    border-radius: 5px;
    cursor: pointer;
}

.nav-links1 a {
    text-decoration: none;
}

.content {
    font-family: "Pacifico";
    padding: 50px;
    color: #00E69A;
    text-align: center;  
    font-size: medium;
    text-shadow: 2px 2px #000000;
}

.content h1 {
    font-weight: bold;
    font-size: 45px;
    margin-bottom: 20px;
    text-shadow: 2px 2px #000000;
}

.options h2{
    color: #68D10B;
    font: 250px  ;
    text-shadow: 2px 2px #000000;
}

.options p{
    font-family: "Pacifico";
    text-shadow: 2px 2px #808080;
}

.options {
    display: flex;
    justify-content: center;
    margin-bottom: 50px;
}

.option-box {
    padding: 20px;
    border: 1px solid #ddd;
    margin: 10px;
    border-radius: 5px;
    cursor: pointer;
}

.imgg {
    display: flex;
    align-items: center;
    justify-items: center;
    gap: 20px;
    
}

.imgg img {
    width: 50px;
    height: 50px;
    object-fit: cover;
}

.option-box h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.order-button {
    position: absolute;
    bottom: 5%;
    right: 5%;
    z-index: 10;
    background-color: #c85a14;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    position: absolute;
    right: 20px;
    bottom: 20px;

}
        </style>
</head>
<body>
    <header class="header">
        <img src="logo.jpg" alt="Logo">
        <nav>
            <ul class="nav-links1">
                <a href="shop_products.php"> <li class="nav-links"><B>Menu</B></li></a>
                <a href="cart.php"> <li class="nav-links"><B>Cart</B></li></a>
                <a href="about.php"> <li class="nav-links"><B>About</B></li></a>
          </ul>
        </nav>
    </header>
    <div class="bg-img">
        <!-- <img src="mage1.jpg" alt=""> -->
    <div class="content">
        <h1>To Go Train</h1>
        <p>Ready to eat<br>
At your seat<br>
Warm and sweet <br>
Truely a treat</p>
    </div>
    <div class="options">
        <div class="option-box">
            <div class="imgg"><img src="Snack-removebg-preview.png" alt=""> <h2>Snacks</h2></div> 
            <p>Treat yourself to some delicious bites.</p>
        </div>
        <div class="option-box">
            <div class="imgg"><img src="Meals-removebg-preview.png" alt=""> <h2>Meals</h2></div> 
            <p>Explore our wide variety of home-cooked dishes.</p>
        </div>
        <div class="option-box">
            <div class="imgg"><img src="Beverage-removebg-preview.png" alt=""> <h2>Beverages</h2></div> 
            <p>Find the perfect drink to complement your meal.</p>
        </div>
    </div>

</div>
<a href="shop_products.php" class="order-button"><B>Order Now</B></a>
</body>
</html>