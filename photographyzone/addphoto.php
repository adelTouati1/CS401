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
            <form action="/handlers_scripts/imagesHandler.php" id="addimage" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required="required">
                    <input type="file" id="picture" name="picture" accept="image/png, image/jpeg" required>
                    <label for="picture" id="picture"> Select a image to upload:</label>

                    <br>

                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location">

                    <br>
                    <label for="camerabrand">Camera Brand:</label>
                    <input type="text" id="camerabrand" name="camerabrand">
                    <br>
                    <label for="lensesize">Lense size:</label>
                    <input type="text" id="lensesize" name="lensesize">
                    <br>
                    <label for="focus">Focus:</label>
                    <input type="text" id="focus" name="focus">
                    <br>
                    <label for="description">Description:</label>
                    <input type="text" id="description" name="description" rows="3">
                    <br>

                </fieldset>

                <input class="MyButton" type="submit" value="Publish Photo" name="commit">
            </form>
            <div class="footer">
                <p>Photography Zone | Adel Touati © Copyright 2020, All Rights Reserved</p>
            </div>
        </body>
    </div>

    </html>