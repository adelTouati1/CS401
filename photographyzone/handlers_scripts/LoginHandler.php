<?php
require_once("classes/Dao.php");
$dao = new Dao();

// Get email and password
$email = htmlentities($_POST["email"]);
$password = $_POST["password"];

// sanitize & validate it
$validUser = $dao->validateUser($email, $password);
if ($validUser) {
    session_start();
    $_SESSION['AUTH'] = TRUE;
    $_SESSION['name'] = $dao->getFirstName($email)['firstname'];
//TODO: more to come
    header("Location:../index.php");
} else {
    echo "IT IS NOT WORKING";
    $_SESSION['AUTH'] = FALSE;
    header("Location:../login.html");
}
