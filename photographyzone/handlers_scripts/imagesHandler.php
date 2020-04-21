<?php
session_start();
require_once('classes/Dao.php');
  $dao = new Dao();
  
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

  $fi=($_FILES['picture']['tmp_name']);
  $img = fopen($f, 'r') or die("cannot read image\n");
  $data = fread($img, filesize($f));

  $picture = pg_escape_bytea($data);
  fclose($img);
  

  if ($dao->checkEmailExists($email)) {
    $dao->addImage($email, $location, $camerabrand, $lensesize, $focus, $description, $picture);
    $p=$dao->getImage($email);
    header("Location:../index.php");
    
  }else{
    header("Location:../signup.php");
  } 
  

  exit;