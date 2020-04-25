<?php
 session_start();
?>
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
                <div align="center">
                    <?php if (isset($_SESSION['firstname'])){$f = $_SESSION['firstname'];}  ?>
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" value="<?php echo $f; ?>" required="required">
                    <br>
                    <?php if (isset($_SESSION['lastname'])){$l = $_SESSION['lastname'];}  ?>
                    <label for="lastname">Last Name: </label>
                    <input type="text" id="lastname" name="lastname" value="<?php echo $l; ?>" required="required">
                    <br>
                    <?php if (isset($_SESSION['email'])){$e = $_SESSION['email'];}  ?>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $e; ?>" required="required">
                    <br>
                    <?php if (isset($_SESSION['password'])){$p = $_SESSION['password'];}  ?>
                    <label for="password">Password:  </label>
                    <input type="password" id="password" name="password" value="<?php echo $p; ?>" required="required">
                    <br>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <div class='errormessage'>
                     
                            <script>
                                $(document).ready(function() {
                                    $('.errormessage').fadeIn().delay(5000).fadeOut();
                                });
                             </script>


                            <?php if (isset($_SESSION["error1"])) { ?>

                                <div class='errormessage'>
                                    <?php print $_SESSION["error1"] ; ?>
                                </div>
                                
                                <?php } ?>

                             
                    </div>
                </div>
                </fieldset>
                <input type="submit" class="MyButton" name="commit">
            </form>
            <div class="footer">
                <p>Photography Zone | Adel Touati © Copyright 2020, All Rights Reserved</p>
            </div>
    </body>
    </div>

    </html>