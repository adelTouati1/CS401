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
  $p=fopen($fi,'r');
  $data=fread($p,filesize($fi));
  $data=addslashes($data);
  $picture= pg_escape_bytea($data);

  if ($dao->checkEmailExists($email)) {
    move_uploaded_file($_FILES['picture']['tmp_name'],$target);
    $dao->addImage($email, $location, $camerabrand, $lensesize, $focus, $description, $picture);
    header("Location:../index.php");
  }else{
    header("Location:../signup.php");
  } 
  

  exit;