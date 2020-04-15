<?php
require_once('handlers_scripts/imagesHandler.php');
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
     <input class="MyButton" type="button" value="Login" onclick="window.location.href='login.php'" />
     <input class="MyButton" type="button" value="Sign Up" onclick="window.location.href='signup.php'" />
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
<form accept-charset="UTF-8" action="handlers_scripts/imagesHandler.php" class="new_message"
id="new_message"
method="post">
     <fieldset>

   <label for="location">Location:</label>
   <input type="text" id="location" name="location">
   <input type="file" id="imageupload" name="imageupload" accept="image/png, image/jpeg">
   <label for="imageupload" id="imageupload"> Select a image to upload:</label>
   <br>
   <label for="camerabrand">Camera Brand:</label>
   <input type="text" id="camerabrand" name="camerabrand"><br>
   <label for="lensesize">Lense size:</label>
   <input type="text" id="lensesize" name="lensesize"><br>
   <label for="focus">Focus:</label>
   <input type="text" id="focus" name="focus"><br>
   <label for="description">Description:</label>
   <input type="text" id="description" name="description" rows="3"><br>



</fieldset>
 
  <input class="MyButton" type="submit" value="Publish Photo" name="commit">
  </form>
  <div class="footer">
 <p>Photography Zone | Adel Touati</p>
  </div>
  </body>
</div>

