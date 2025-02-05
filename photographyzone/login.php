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
            <form accept-charset="UTF-8" action="handlers_scripts/LoginHandler.php" id="login-form" method="post">
                <div align="center">
                <?php if (isset($_SESSION['email'])){$e = $_SESSION['email'];}  ?>
                    <label for="email">Email:</label>
                    <input class='login<?php if (isset($_SESSION["error"])) { echo " inputError"; } ?>' type="email" id="inputlogin" name="email" value="<?php echo $e; ?>" required="required">
                    <br>
                    <?php if (isset($_SESSION['password'])){$p = $_SESSION['password'];}  ?>
                    <label for="password">Password:</label>
                    <input class='login<?php if (isset($_SESSION["error"])) { echo " inputError"; } ?>' type="password" id="inputlogin" name="password" value="<?php echo $p; ?>" required="required">
                    <br>
                    <?php  if (isset($_SESSION["AUTH"]) && $_SESSION["AUTH"]) {
	                    header("Location:index.php");
                        } ?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <?php if (isset($_SESSION["error"])) { ?>
                        <div class='error'>
                            <script>
                                $(document).ready(function() {
                                    $('.error').fadeIn().delay(5000).fadeOut();
                                });
                             </script>
                                <div class='errormessage'>
                                    <?php print $_SESSION["error"] ; ?>
                                </div>
                                
                                      
                        </div>
                    <?php } ?>  
                        
                </div>
                <input class='MyButton' type="submit" value="Login" name="commit">
            </form>
            <div class="footer">
                <p>Photography Zone | Adel Touati © Copyright 2020, All Rights Reserved</p>
            </div>

        </body>

    </div>
    <script>
        $('#login-form').validate();
    </script>
    <?php
unset($_SESSION["error"]);
?>

    </html>