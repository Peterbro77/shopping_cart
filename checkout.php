<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #success_message{ display: none;}
        body {
  background-image: url("checkoutbk.png");
  background-repeat: no-repeat;
  background-size: 1500px 800px;
  text-shadow: 1px 1px #808080
}
#btn{
    align-items:top;
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
<body >
<div class="container">

<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><B>Please Enter your Details</B></legend>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">First Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" placeholder="First Name" class="form-control"  type="text">
</div>
</div>
</div>
<br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Last Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>
<br>

<!-- Text input-->
   <div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
</div>
</div>
</div>
<br>


<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Phone #</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="phone" placeholder="+91" class="form-control" type="text">
</div>
</div>
</div>
<br>

<!-- Text input-->
  
<div class="form-group">
<label class="col-md-4 control-label">Train No.</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="address" placeholder="Address" class="form-control" type="text">
</div>
</div>
</div>
<br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">City</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="city" placeholder="city" class="form-control"  type="text">
</div>
</div>
</div>
<br>

<!-- Select Basic -->

<div class="form-group"> 
<label class="col-md-4 control-label">State</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="state" class="form-control selectpicker" >
  <option value=" " >Please select your state</option>
  <option>Alabama</option>
  <option>Alaska</option>
  <option >Arizona</option>
  <option >Arkansas</option>
  <option >California</option>
  <option >Colorado</option>
  <option >Connecticut</option>
  <option >Delaware</option>
  <option >District of Columbia</option>
  <option> Florida</option>
  <option >Georgia</option>
  <option >Hawaii</option>
  <option >daho</option>
  <option >Illinois</option>
  <option >Indiana</option>
  <option >Iowa</option>
  <option> Kansas</option>
  <option >Kentucky</option>
  <option >Louisiana</option>
  <option>Maine</option>
  <option >Maryland</option>
  <option> Mass</option>
  <option >Michigan</option>
  <option >Minnesota</option>
  <option>Mississippi</option>
  <option>Missouri</option>
  <option>Montana</option>
  <option>Nebraska</option>
  <option>Nevada</option>
  <option>New Hampshire</option>
  <option>New Jersey</option>
  <option>New Mexico</option>
  <option>New York</option>
  <option>North Carolina</option>
  <option>North Dakota</option>
  <option>Ohio</option>
  <option>Oklahoma</option>
  <option>Oregon</option>
  <option>Pennsylvania</option>
  <option>Rhode Island</option>
  <option>South Carolina</option>
  <option>South Dakota</option>
  <option>Tennessee</option>
  <option>Texas</option>
  <option> Uttah</option>
  <option>Vermont</option>
  <option>Virginia</option>
  <option >Washington</option>
  <option >West Virginia</option>
  <option>Wisconsin</option>
  <option >Wyoming</option>
</select>
</div>
</div>
</div>
<br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Train Timing</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="zip" placeholder="" class="form-control"  type="text">
</div>
</div>
</div>
<br>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label">Landmarks or extra details(if any)</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
<input name="website"  class="form-control" type="text">
</div>
</div>
</div>

<!-- radio checks -->
<div class="form-group">
                    <label class="col-md-4 control-label">How would you like to pay</label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="hosting" value="UPI" /> UPI
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="hosting" value="Cash" /> Cash
                            </label>
                        </div>
                    </div>
                </div>

<!-- Text area -->

<div class="form-group">
<label class="col-md-4 control-label">Extra instructions(If any)</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        <textarea class="form-control" name="comment" placeholder=""></textarea>
</div>
</div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
    
    <a href="frontPage.php" onclick="return confirm('Order Received, your order will arrive shortly!')"><button type = "button"><span></span><B><Font color = "green"  style = "text-shadow: 1px 1px #000000;";>Order!</Font></B></button></a></div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->

</body>
</html>