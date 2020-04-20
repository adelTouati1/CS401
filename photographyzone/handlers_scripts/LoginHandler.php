<?php
session_start();
if ("_POST") {
require_once("classes/Dao.php");
$dao = new Dao();

// Get email and password
$email = htmlentities($_POST['email']);
$password = $_POST['password'];
if (! $dao->checkEmailExists($email)) {
	$_SESSION["error"] = "Email or Password invalid";
  } elseif (! $dao->validateUser($email, $password)) {
    $_SESSION["error"] = "Email or Password invalid";
    $_SESSION['AUTH'] = FALSE;
  }  else {
	unset($_SESSION["error"]);
    $_SESSION['AUTH'] = true;
    $_SESSION['name'] = $dao->getFirstName($email)['firstname'];
    header("Location:../index.php");
  }
  header("Location:../login.php");
}
  exit;
