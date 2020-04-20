<?php
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


     <input class="MyButton" type="button" value="Login" onclick="window.location.href='login.html'" />
     <input class="MyButton" type="button" value="Sign Up" onclick="window.location.href='signup.html'" />
   
    </form>

    <img id="logo" src="logo.jpg"
    alt="logo" onclick="window.location.href='index.php'"/>
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
value="<?php 
			if(isset($_SESSION["log_email"])){ 
				echo $_SESSION["log_email"];
				unset($_SESSION["log_email"]);
			}
			?>">
			<div id="email_error">
				<p id="email_error_text">
					<?php
					if(isset($_SESSION["emailNotEntered"])){
						echo $_SESSION["emailNotEntered"];
						unset($_SESSION["emailNotEntered"]);
					}
					if(isset($_SESSION["unauth_user"])){
						echo($_SESSION["unauth_user"]);
						unset($_SESSION["unauth_user"]);
					}
					?>
				</p>
<label for="password">Password:</label>
<input type="password" id="inputlogin" name="Password" required="required"> <br>
value="<?php 
			if(isset($_SESSION["log_password"])){ 
				echo $_SESSION["log_password"];
				unset($_SESSION["log_password"]);
			}
			?>">
			<div id="password_error">
				<p id="password_error_text">
					<?php
					if(isset($_SESSION["passwordNotEntered"])){
						echo $_SESSION["passwordNotEntered"];
						unset($_SESSION["passwordNotEntered"]);
					}
					if(isset($_SESSION["unauth_user"])){
						echo($_SESSION["unauth_user"]);
						unset($_SESSION["unauth_user"]);
					}
					?>
				</p>
</div>
  <input  class="logButton" type="submit" value="Login" name="commit">
  </form>
  <div class="footer">
 <p>Photography Zone | Adel Touati</p>
  </div>

  </body>

</div>
</html>
