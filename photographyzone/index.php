<?php
include_once('index.php');
 session_start(); 
 if (isset($_SESSION["mess"])) {
	echo "<div class='error'>" .  $_SESSION["mess"] . "</div>";
}
?>


<!DOCTYPE html> 
<html>
<div id="container">
  <head>
    <title>Photography Zone</title>
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <hr/>
   <div>
     <form>

     <?php if ($_SESSION['AUTH']): ?>

    <MARQUEE bgcolor=white loop="-1" scrollamount="2" width="100%">Welcome: <?php echo $_SESSION['name'] ?></MARQUEE>
    <input class="MyButton" type="button" value="Log out" onclick="window.location.href='Logout.php'"/>
    <?php else: ?>
     <input class="MyButton" type="button" value="Login" onclick="window.location.href='login.php'" />
     <input class="MyButton" type="button" value="Sign Up" onclick="javascript:window.location.href='signup.php'" />
     <?php endif; ?>
    </form>
    

    <img id="logo" src="logo.jpg"
    alt="logo" onclick="window.location.href='index.php'"/>
    </div>
    <div class="sub-nav cs401">
  <ul>
          <li class="spacer-401">&nbsp;</li>
            <li>
      <a href="index.php">Browse</a>
    </li>
    <li id="current-page">
      <a href="portrait.php">Portrait</a>
    </li>
    <li>
      <a href="blog.php">Blog</a>
    </li>
    <li>
      <a href="contact.php">Contact</a>
    </li>

      </ul>
      <div class="container">

<!-- Full-width images with number text -->
<div class="mySlides">
  <div class="numbertext">1 / 6</div>
    <img src="aaron-burden.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 6</div>
    <img src="alexandre-chambon.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 6</div>
    <img src="kasper-rasmussen.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">4 / 6</div>
    <img src="kevin-green.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">5 / 6</div>
    <img src="nathan-dumlao.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">6 / 6</div>
    <img src="robert-bye.jpg" style="width:100%">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<!-- Image text -->
<div class="caption-container">
  <p id="caption"></p>
</div>

<!-- Thumbnail images -->
<div class="row">
  <div class="column">
    <img class="demo cursor" src="aaron-burden.jpg" style="width:100%" onclick="currentSlide(1)" alt="The butterfly">
  </div>
  <div class="column">
    <img class="demo cursor" src="alexandre-chambon.jpg" style="width:100%" onclick="currentSlide(2)" alt="Horseshoe bend">
  </div>
  <div class="column">
    <img class="demo cursor" src="kasper-rasmussen.jpg" style="width:100%" onclick="currentSlide(3)" alt="Architecture">
  </div>
  <div class="column">
    <img class="demo cursor" src="kevin-green.jpg" style="width:100%" onclick="currentSlide(4)" alt="Mountains and fog">
  </div>
  <div class="column">
    <img class="demo cursor" src="nathan-dumlao.jpg" style="width:100%" onclick="currentSlide(5)" alt="Coffee!">
  </div>
  <div class="column">
    <img class="demo cursor" src="robert-bye.jpg" style="width:100%" onclick="currentSlide(6)" alt="Waterfall">
  </div>
</div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<div class="line"> </div>

    </ul>
    <div class="footer">
   <p>Photography Zone | Adel Touati</p>
    </div>
  </body>
</div>
</html>
