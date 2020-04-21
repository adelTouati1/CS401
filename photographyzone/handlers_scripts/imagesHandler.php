<?php
session_start();
require_once('classes/Dao.php');
  $dao = new Dao();
  define('MAX_UP', 16000000);
  if ($_FILES['picture']['size']==0) { die("No file selected"); }
if ($_FILES['picture']['size']>MAX_UP) { die("Exceeded maximum allowed size"); } 
if (exif_imagetype($_FILES['picture']['tmp_name'])===false) { die("Not an image"); }
  $email = $_POST["email"];
  $_SESSION["email"] = $email;

  $location = $_POST["location"];
  $_SESSION["location"] = $location;

  $camerabrand = $_POST["camerabrand"];
  $_SESSION["camerabrand"] = $camerabrand;

  $lensesize = $_POST["lensesize"];
  $_SESSION["lensesize"] = $lensesize;
 
  $focus = $_POST["focus"];
  $_SESSION["focus"] = $focus;

  $description = $_POST["description"];
  $_SESSION["description"] = $description;
  
  $picture = $_POST["picture"];

  if ($dao->checkEmailExists($email)) {
    $dao->addImage($email, $location, $camerabrand, $lensesize, $focus, $description, $picture);
    header("Location:../index.php");
  }else{
    header("Location:../signup.php");
  } 
  

  exit;