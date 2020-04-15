<?php
session_start();
require_once('classes/Dao.php');
  $dao = new Dao();
  unset($_SESSION["error1"]);
  
 
  $firstname = $_POST["firstname"];
  $_SESSION["firstname"] = $firstname;

  $lastname = $_POST["lastname"];
  $_SESSION["lastname"] = $lastname;

  $email = $_POST["email"];
  $_SESSION["email"] = $email;
 

  $password1 = $_POST["password1"];
  
  if ($dao->checkEmailExists($email)) {
    $_SESSION["error1"] = "Email already taken!";
  } 

  if (isset($_SESSION["error1"])){
    header("Location:../signup.php");
  } else {
    echo "Account Created.";
    $dao->addUser($firstName, $lastName, $email, $password);
    header("Location:../login.html");
  }
  exit;


