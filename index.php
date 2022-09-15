<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <style>

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: flex;
}
.topnav a.split {
  float: right;
  background-color: #04AA6D;
  color: white;
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}



/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 90%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
/*
.active {
  background-color: #717171;
}

 Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<table>
  <div class="heading">
  <tr>
  <img src="../image/logo.jpg" width="80px" height="50px">
  </tr>
  <tr> <div class="topnav">
  <a class="active" href="#Men">Men</a>
  <a href="#women">Women</a>
  <a href="#kids">Kids</a>
  <a href="#Beauty">Beauty</a>
  <a href="#Electronic">Electronic</a>
  <a href="#admin" ><a href="./admin.php" class="split">Admin</a></a>
  <a href="#login" ><a href="./login.php" class="split">Login</a></a>
  <a href="#search" ><a href="./.php" class="split">Search</a></a>
  </tr></div>
</table>
</div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../image/img.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../image/img2.png" style="width:70%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../image/img5.jfif" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>