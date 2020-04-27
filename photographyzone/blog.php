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

            <h1>Photography Education</h1>
            <div class="row">
                <div class="column">
                    <img id="photo" src="edu1.jpg" alt="photo" style="width:100%">
                    <h3 style="text-align:center">Use the Rule of Thirds </h3>
                    <p>This rule helps you take eye-catching pictures by using one of the most effective rules of composition.

                        <br>If you want to take pictures that have a “wow” factor built in them, the Rule of Thirds is the composition secret you need to take advantage of!

                        <br>To use the rule of thirds, imagine four lines, two lying horizontally across the image and two vertical creating nine even squares. Some images will look best with the focal point in the center square, but placing the subject off-center at one of the intersecting points of the imaginary lines will often create a more aesthetically composed photograph.

                        <br>When a photograph is composed using the rule of thirds the eyes will wander the frame. A picture composed using the rule of thirds is usually more pleasing to the eye. </p>

                </div>
                <div class="column">
                    <img id="photo" src="edu2.jpg" alt="photo" style="width:100%">
                    <h3 style="text-align:center">Avoid Camera Shake </h3>
                    <p>Camera shake or blur is something that can plague any photographer and here are some ways to avoid it.

                    <br>First, you need to learn how to hold your camera correctly; use both hands, one around the body and one around the lens and hold the camera close to your body for support.

                    <br>Also, for handheld shooting, make sure that you are using a shutter speed that is appropriate for your lens’ focal length. If you’re shutter speed is too slow, any unintentional movement of the camera will result in your entire photograph coming out blurry.

                    <br>The rule of thumb is not to shoot at a shutter speed that is slower than your focal length to minimize this problem:

                    <br>1 / Focal Length (in mm) = Minimum Shutter Speed (in seconds)

                    <br>So, as an example, if you’re using a 100mm lens, then your shutter speed should be no lower than 1/100th of a second. </p>

                </div>
                <div class="column">
                    <img id="photo" src="edu3.jpg" alt="photo" style="width:100%">
                    <h3 style="text-align:center">Use a Polarizing Filter</h3>
                    <p>If you can only buy one filter for your lens, make it a polarizer.

                    <br>The recommended type of polarizer is circular because these allow your camera to use TTL (through the lens) metering such as auto exposure.

                    <br>This filter helps reduce reflections from water as well as metal and glass; it improves the colors of the sky and foliage and will help give your photos the WOW factor. It will do all that while protecting your lens. There’s no reason why you can’t leave it on for all of your photography.</p>
                </div>
            </div>

            <h1>Photography Insperation</h1>
            <div class="row">
                <div class="column">
                    <img id="photo" src="insp3.jpg" alt="photo" style="width:100%">
                    <h3 style="text-align:center">Go on a photo walk</h3>
                    <p>Attend a photo walk and explore new places with your camera. They’re regularly organized in many places around the world, so you’ll never run out of opportunities. To join, all you have to do is search for events online and sign up. And the best part? Most of them are free! Just remember that you’ll be walking a lot, so pack light and only bring the equipment you need.</p>

                </div>
                <div class="column">
                    <img id="photo" src="insp1.jpg" alt="photo" style="width:100%">
                    <h3 style="text-align:center">Take photos of strangers on the streets</h3>
                    <p>Challenge yourself to approach strangers and ask them if you could take a photo. If they agree, you can suggest a pose or ask them to do something interesting. Alternatively, be a fly on the wall and take candid photos of people documentary-style. </p>

                </div>
                <div class="column">
                    <img id="photo" src="insp2.jpg" alt="photo" style="width:100%">
                    <h3 style="text-align:center">Express yourself with self portraits</h3>
                    <p>Forget selfies and learn to create proper self-portraits using a tripod and a camera. Once you find the right location, set your device to self-timer mode; if you don’t like using a timer, you can also activate it using a remote control. When you’re ready, press the shutter, walk to your position, and pose. If you want self-portraits on the go, you can also take a photo of yourself in front of a mirror.</p>
                </div>
            </div>

            </ul>
            <div class="footer">
                <p>Photography Zone | Adel Touati © Copyright 2020, All Rights Reserved</p>
            </div>
        </body>

    </div>

    </html>