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

        </div>
        
        <div class="onetofour" id="sl">
                <button class="bt" onclick="one()">1</button>
                <button class="bt" onclick="two()">2</button>
                <button class="bt active" onclick="four()">4</button>
        </div>  

        <div class ="box">
            <div class="rowp">
                <div class="columnp">
                    <img src="/images/1.jpg" style="width:100%">
                    <img src="/images/2.jpg" style="width:100%">
                    <img src="/images/3.jpg" style="width:100%">
                    <img src="/images/4.jpg" style="width:100%">
                    <img src="/images/5.jpg" style="width:100%">
                    <img src="/images/6.jpg" style="width:100%">
                    <img src="/images/7.jpg" style="width:100%">
                    <img src="/images/28.jpg" style="width:100%">
                </div>
                <div class="columnp">
                    <img src="/images/8.jpg" style="width:100%">
                    <img src="/images/9.jpg" style="width:100%">
                    <img src="/images/10.jpg" style="width:100%">
                    <img src="/images/11.jpg" style="width:100%">
                    <img src="/images/12.jpg" style="width:100%">
                    <img src="/images/13.jpg" style="width:100%">
                    <img src="/images/27.jpg" style="width:100%">
                    <img src="/images/33.jpg" style="width:100%">
                </div>
                <div class="columnp">
                    <img src="/images/14.jpg" style="width:100%">
                    <img src="/images/15.jpg" style="width:100%">
                    <img src="/images/16.jpg" style="width:100%">
                    <img src="/images/17.jpg" style="width:100%">
                    <img src="/images/18.jpg" style="width:100%">
                    <img src="/images/19.jpg" style="width:100%">
                    <img src="/images/20.jpg" style="width:100%">
                    <img src="/images/31.jpg" style="width:100%">
                </div>
                <div class="columnp">
                    <img src="/images/21.jpg" style="width:100%">
                    <img src="/images/22.jpg" style="width:100%">
                    <img src="/images/23.jpg" style="width:100%">
                    <img src="/images/24.jpg" style="width:100%">
                    <img src="/images/25.jpg" style="width:100%">
                    <img src="/images/26.jpg" style="width:100%">
                    <img src="/images/32.jpg" style="width:100%">
                    <img src="/images/30.jpg" style="width:100%">
                   
                </div>
            </div>
        </div>
            <script>
                // Get the elements with class="column"
                var elements = document.getElementsByClassName("columnp");

                // Declare a loop variable
                var i;
                // Full-width images
                function one() {
                    for (i = 0; i < elements.length; i++) {
                        elements[i].style.msFlex = "100%";  // IE10
                        elements[i].style.flex = "100%";
                    }
                }

                // Two images side by side
                function two() {
                    for (i = 0; i < elements.length; i++) {
                        elements[i].style.msFlex = "50%";  // IE10
                        elements[i].style.flex = "50%";
                    }
                }
                // Four images side by side
                function four() {
                    for (i = 0; i < elements.length; i++) {
                        elements[i].style.msFlex = "25%"; // IE10
                        elements[i].style.flex = "25%";
                    }
                }

                // Add active class to the current button (highlight it)
                var header = document.getElementById("sl");
                var btns = header.getElementsByClassName("bt");
                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function() {
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                    });
                }
            </script>

            </ul>
            <div class="footer">
                <p>Photography Zone | Adel Touati © Copyright 2020, All Rights Reserved</p>
            </div>
    </body>
    </div>

    </html>