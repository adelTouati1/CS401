<?php
require_once('handlers_scripts/SignupHandler.php');
?>
<div id="container">
  <head>
    <title>Photography Zone</title>
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <hr/>


   <div>

     <form>
     <input class="MyButton" type="button" value="Login" onclick="window.location.href='login.html'" />
     <input class="MyButton" type="button" value="Sign Up" onclick="window.location.href='signup.html'" />
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
<form action="/handlers_scripts/SignupHandler.php" id="register" method="post">
     <fieldset>

   <label for="firstName">First Name:</label>
   <input type="text" id="firstName" name="firstName">
   <br>
   <label for="lastName">Last Name:</label>
   <input type="text" id="lastName" name="lastName"><br>
   <label for="email">Email:</label>
   <input type="email" id="email" name="email"><br>
   <label for="password">Password:</label>
   <input type="password" id="password" name="password"><br>

</fieldset>
  <input type="submit" class="MyButton" name="commit">
  </form>
  <div class="footer">
 <p>Photography Zone | Adel Touati</p>
  </div>
  </body>
</div>

