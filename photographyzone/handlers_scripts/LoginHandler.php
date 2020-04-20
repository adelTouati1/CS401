<?php
require_once("classes/Dao.php");
$dao = new Dao();

if(isset($_POST["email"])  && $_POST["email"] != ""){
    $email = $_POST['email'];
    $_SESSION["log_email"] = $email;
    unset($_SESSION['emailNotEntered']);
}

else{
    unset($_SESSION['email']);
    $_SESSION["emailNotEntered"] = "Must Enter an Email";	
}

if(isset($_POST["password"])  && $_POST["password"] != ""){
    $password = $_POST['password'];
    $_SESSION["log_pass"] = $password;
    unset($_SESSION['passwordNotEntered']);
}

else{
    unset($_SESSION['password']);
    $_SESSION["passwordNotEntered"] = "Must Enter a Password";
    
}

if(isset($_SESSION["emailNotEntered"]) || isset($_SESSION["passwordNotEntered"])){
    header("Location: login.php");
}
else{
    if($db->getConnection()){
        $password = hash("sha256", $password . "fKd93Vmz!k*dAv5029Vkf9$3Aa");
// sanitize & validate it
$validUser = $dao->validateUser($email, $password);
if ($validUser) {
    session_start();
    $_SESSION['AUTH'] = TRUE;
    $_SESSION['name'] = $dao->getFirstName($email)['firstname'];
//TODO: more to come
    header("Location:../index.php");
} else {
    $_SESSION['AUTH'] = FALSE;
    $_SESSION["unauth_user"] = "Invalid Email or Password!";
	unset($_SESSION["auth_user"]);
	header('Location: login.php');
}
}
else{
    echo "Coudn't connect to to DB";
}
}
?>