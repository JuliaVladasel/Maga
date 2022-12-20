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
        <li><a href="http://localhost/Maga/Home.php">Home</a></li>
        <li><a href="#">Bracelets</a></li>
        <li><a href="#">Necklaces</a></li>
        <li><a href="#">Rings</a></li>
        <li><a href="#">Accesories</a></li>
        <li><a href="http://localhost/Maga/About.php">About us</a></li>
        <li><a href="#">Contact</a></li>
        <li><button class="btn"><i class="fa fa-cart-arrow-down"></i></button></li>
        <li><a href="#">Bine ai venit!</a></li>
    </ul>
</div>

<div class="container">
<div class="swiper">
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src="imagini/poza1.jpg"></div>
      <div class="swiper-slide"><img src="imagini/poza2.jpg"></div>
      <div class="swiper-slide"><img src="imagini/poza3.jpg"></div>
      <div class="swiper-slide"><img src="imagini/poza4.jpg"></div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
 const swiper = new Swiper('.swiper', {
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
</script>
<br><br><br><br>
<div class="div1"><img src="imagini/poza_femeie.jpg" class="poza1">
  <img src="imagini/text.jpg" class="poza3">
  <img src="imagini/poza_femeie1.jpg" class="poza2">
</div>







</body>
</html>
