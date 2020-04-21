<?php
session_start();
require_once('classes/Dao.php');
  $dao = new Dao();
  define('MAX_UP', 16000000);
if ($_FILES['picture']['size']>MAX_UP) { die("Exceeded maximum allowed size"); } 
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
  if(isset($_POST["picture"])){
  $picture =[$_FILES["picture"], file_get_contents($_FILES['picture'])];;
  $_SESSION["picture"] = $picture;
  }
  if ($dao->checkEmailExists($email)) {
    $dao->addImage($email, $location, $camerabrand, $lensesize, $focus, $description, $picture);
    header("Location:../index.php");
  }else{
    header("Location:../signup.php");
  } 
  

  exit;