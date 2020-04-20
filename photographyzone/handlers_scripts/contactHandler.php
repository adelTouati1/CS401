<?php
session_start();
require_once('classes/Dao.php');
  $dao = new Dao();

  $message = $_POST['message'];

  $email = htmlentities($_POST['email']);
  
  if ($dao->checkEmailExists($email)) {
    $dao->message($message,$email);
    $_SESSION["mess"] = "Message sent";
    header("Location:../index.php");
  }else{
    header("Location:../signup.php");
  } 
  

  exit;