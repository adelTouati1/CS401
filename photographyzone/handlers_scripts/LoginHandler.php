<?php
session_start();
if ("_POST") {
require_once("classes/Dao.php");
$dao = new Dao();

// Get email and password
$email = htmlentities($_POST['email']);
$password = $_POST['password'];
if (! $dao->checkEmailExists($email)) {
    $_SESSION["error"] = "Email invalid";
    header("Location:../login.php");
  } elseif (! $dao->validateUser($email, $password)) {
    $_SESSION["error"] = "Password invalid";
    $_SESSION['AUTH'] = FALSE;
    header("Location:../login.php");
  }  else {
	unset($_SESSION["error"]);
    $_SESSION['AUTH'] = true;
    $_SESSION['name'] = $dao->getFirstName($email)['firstname'];
    header("Location:../index.php");
  }
}
  exit;
