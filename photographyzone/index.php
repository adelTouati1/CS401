<?php
include_once('index.php');
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

     <?php if ($_SESSION['AUTH']): ?>

    <MARQUEE bgcolor=white loop="-1" scrollamount="2" width="100%">Welcome: <?php echo $_SESSION['name'] ?></MARQUEE>
    <input class="MyButton" type="button" value="Log out" onclick="window.location.href='Logout.php'"/>
    <?php else: ?>
     <input class="MyButton" type="button" value="Login" onclick="window.location.href='login.html'" />
     <input class="MyButton" type="button" value="Sign Up" onclick="javascript:window.location.href='signup.html'" />
     <?php endif; ?>
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



    <div class="row">
      <div class="column">
      <img id="photo" src="photo1.jpeg"
    alt="photo" style="width:100%">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in interdum leo. Nullam tempor justo vel tellus facilisis, vitae semper nulla finibus. Nulla laoreet aliquam erat, in iaculis velit consequat eget. Sed nec semper justo. Aliquam erat volutpat. Nulla vulputate risus sagittis congue porttitor. Pellentesque interdum libero magna, sit amet condimentum lacus rhoncus a. </p>

    </div>
     <div class="column">
    <img id="photo" src="photo2.jpg"
    alt="photo" style="width:100%">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in interdum leo. Nullam tempor justo vel tellus facilisis, vitae semper nulla finibus. Nulla laoreet aliquam erat, in iaculis velit consequat eget. Sed nec semper justo. Aliquam erat volutpat. Nulla vulputate risus sagittis congue porttitor. Pellentesque interdum libero magna, sit amet condimentum lacus rhoncus a. </p>

  </div>
  <div class="column">
    <img id="photo" src="photo3.jpg"
    alt="photo" style="width:100%">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in interdum leo. Nullam tempor justo vel tellus facilisis, vitae semper nulla finibus. Nulla laoreet aliquam erat, in iaculis velit consequat eget. Sed nec semper justo. Aliquam erat volutpat. Nulla vulputate risus sagittis congue porttitor. Pellentesque interdum libero magna, sit amet condimentum lacus rhoncus a. </p>
  </div>
</div>
<div class="add">
      <form>
      <input class="MyButton" type="button" value="Add Photo" onclick="window.location.href='addphoto.html'" />
      </form>
</div>
<div class="line"> </div>

    </ul>
    <div class="footer">
   <p>Photography Zone | Adel Touati</p>
    </div>
  </body>
</div>
</html>
