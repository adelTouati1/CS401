<?php
session_start();
require_once('classes/Dao.php');
  $dao = new Dao();
  $target= "images/";
  $target= $target.basename($_FILES['picture']['name']);
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

  $picture=($_FILES['picture']['name']);

  if(move_uploaded_file($_FILES['picture']['tmp_name'],$target)){
    echo"The file".basename($_FILES['uploadedfile']['name'])."has been uploaded, and your information has been added";
  }else{
    echo "Sorry there was a problem";
  }

  if ($dao->checkEmailExists($email)) {
    $dao->addImage($email, $location, $camerabrand, $lensesize, $focus, $description, $picture);
    header("Location:../index.php");
  }else{
    header("Location:../signup.php");
  } 
  

  exit;