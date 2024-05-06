<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
  background-image: url("aboutbkimg.png");
  background-repeat: no-repeat;
  background-size: 1500px 800px;
}
button{
    position: relative;
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    font-weight: bold;
    border: 2px solid #000000;
    border-radius: 12px;
    background: transparent;
    color: white;
    cursor: pointer;
    overflow: hidden;
}
span{
    background: #000000;
    height: 100%;
    width: 0;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
button:hover span{
    width: 100%;
}
    </style>
</head>
<body>
    <a href="frontPage.php"><button type = "button"><span></span><B><font style = "text-shadow: 2px 2px #000000;" >Go Back</font></B></button></a>
</body>
</html>