<?php
 session_start(); ?>

    <!DOCTYPE html>
    <html>
    

        <head>
            <title>Photography Zone</title>
            <link rel="icon" href="favicon.png">
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>

        <body>
          <div class="header">  
            <div>
                <form>

                    <?php if ($_SESSION['AUTH']): ?>

                        <MARQUEE bgcolor=white loop="-1" scrollamount="2" width="100%">
                            <?php echo $_SESSION['name'] ?>
                        </MARQUEE>
                        <input class="MyButton" type="button" value="Log out" onclick="window.location.href='Logout.php'" />
                        <?php else: ?>
                            <input class="MyButton" type="button" value="Login" onclick="window.location.href='login.php'" />
                            <input class="MyButton" type="button" value="Sign Up" onclick="javascript:window.location.href='signup.php'" />
                            <?php endif; ?>
                </form>

                <img id="logo" src="logo.jpg" alt="logo" onclick="window.location.href='index.php'" />
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
            </div>
            <form accept-charset="UTF-8" action="handlers_scripts/contactHandler.php" id="contact-form" method="post">
                <fieldset>

                    <label for="message">Message:</label>
                    <br>
                    <textarea type="text" rows="5" cols="80" id="message" name="message"></textarea>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    <br>
                    <?php  if (isset($_SESSION["mess"])){
	header("Location:index.php");
}
 ?>

                </fieldset>
                <input class="MyButton" type="submit" value="Send" name="commit" />
            </form>
            <div class="footer">
                <p>Photography Zone | Adel Touati © Copyright 2020, All Rights Reserved</p>
            </div>
        </body>

    </html>