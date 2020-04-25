<?php
session_start();
require_once('classes/Dao.php');
  $dao = new Dao();

  $message = $_POST['message'];
  $_SESSION["message"] = $message;

  $email = htmlentities($_POST['email']);
  $_SESSION["email"] = $email;
  
  if ($dao->checkEmailExists($email)) {
    $dao->message($message,$email);
    $_SESSION["mess"] = "Message sent";
    header("Location:../contact.php");
    
  }else{
    header("Location:../contact.php");
    $_SESSION["mess"] = "Sign up to be able to contact us!";
  } 
  

  exit;