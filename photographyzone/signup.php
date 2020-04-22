<?php
 session_start();
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
                    <input class="MyButton" type="button" value="Login" onclick="window.location.href='login.php'" />
                    <input class="MyButton" type="button" value="Sign Up" onclick="window.location.href='signup.php'" />
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
            <form action="/handlers_scripts/SignupHandler.php" id="register" method="post">
                <fieldset>

                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname">
                    <br>
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname">
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                    <br>

                </fieldset>
                <input type="submit" class="MyButton" name="commit">
            </form>
            <div class="footer">
                <p>Photography Zone | Adel Touati</p>
            </div>
        </body>
    </div>

    </html>