
<?php
include_once('index.php');
 session_start(); ?>

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

<li>
    <!-- Display user name -->
    <a class="deep-purple-text"> <?php echo $_SESSION['name'] ?></a>
    <?php else: ?>
     <input class="MyButton" type="button" value="Login" onclick="window.location.href='login.html'" />
     <input class="MyButton" type="button" value="Sign Up" onclick="window.location.href='signup.html'" />
    <?php endif; ?>
    </form>

    <img id="logo" src="logo.jpg"
    alt="logo"/>
    </div>
    <div class="sub-nav cs401">
  <ul>
          <li class="spacer-401">&nbsp;</li>
            <li>
      <a href="index.html">Browse</a>
    </li>
    <li id="current-page">
      <a href="portrait.html">Portrait</a>
    </li>
    <li>
      <a href="blog.html">Blog</a>
    </li>
    <li>
      <a href="contact.html">Contact</a>
    </li>

      </ul>
</div>
<form accept-charset="UTF-8" action="handlers_scripts/LoginHandler.php" class="new_message" id="new_message"
method="post">
<div align="center">
<label for="email">Email:</label>
<input type="email" id="inputlogin" name="email" required="required"><br>
<label for="password">Passwrod:</label>
<input type="password" id="inputlogin" name="Password" required="required"> <br>
</div>
  <input  class="logButton" type="submit" value="Login" name="commit">
  </form>
  <div class="footer">
 <p>Photography Zone | Adel Touati</p>
  </div>

  </body>

</div>
</html>
