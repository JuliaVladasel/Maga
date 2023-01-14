<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Ju Jewellery</title>
<link rel="icon" type="image/x-icon" href="imagini/JB.ico">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:white">

<hr width="100%" 
    size="15" 
    align="center"
    color="black"
</hr>

<div class="titlu">Ju Jewellery</div>

<div class="navbar">
    <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="#">Bracelets</a></li>
        <li><a href="#">Necklaces</a></li>
        <li><a href="#">Rings</a></li>
        <li><a href="#">Accesories</a></li>
        <li><a href="About.php">About us</a></li>
        <li><a href="#">Contact</a></li>
        <li><button class="btn"><i class="fa fa-cart-arrow-down"></i></button></li>
        <li>><a href="LogIn-formular.php"><button class="btn"><i class="	fa fa-user-circle-o"></i></button></a></li>
    </ul>
</div>

<br><br><br>
<div class="divLogIn">

    <h2 class="headLogIn">Log In</h2>

    <div class="divLogIn1"><form action="LogIn.php" method="POST">
  <div class="divLogIn2"><br><br><p class="login_text"><b> Email</b> <br> <input type="text" name="Email"></p> 
                                <p class="login_text"><b> Password </b><br> <input type="text" name="Password"></p>

   <p class="login_text"><input type="reset" value="CANCEL">
   <input type="submit" value="LOGIN"></p>
   <p class="signup">You dont have an account?</p>
   <p class="signup"><a href="SignUp-formular.php" class="button">SIGNUP</a></p></div>
  
</form></div>
</div>






</body>
</html>