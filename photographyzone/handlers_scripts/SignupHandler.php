<?php
require_once('../classes/Dao.php');
/**
 * Check the specified string for injection
 * @param $str string to check for injection
 * @return bool true string contains injected characters; false otherwise
 */
function isInjected($str)
{
    $injections = array('(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
    );
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    if (preg_match($inject, $str)) {
        return true;
    } else {
        return false;
    }
}

// Gather the details
$firstName = $lastName = "";
$email = "";
$password = "";
$dao = new Dao();
$invalid = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // first name
    if (empty($_POST["firstName"])) {
        $nameErr = "first name is required";
        $_SESSION['nameErr'] = $nameErr;
        $invalid = true;
    } else {
        $firstName = isInjected($_POST["firstName"]);
        $_SESSION['preset_username'] = $firstName;
        if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
            $nameErr = "Only letters and white space allowed\n";
            $_SESSION['nameErr'] = $nameErr;
            $invalid = true;
        }
    }

    // last name
    if (empty($_POST["lastName"])) {
        $nameErr = "last name is required";
        $_SESSION['nameErr'] = $nameErr;
        $invalid = true;
    } else {
        $lastName = isInjected($_POST["lastName"]);
        $_SESSION['preset_username'] = $lastName;
        if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
            $nameErr = "Only letters and white space allowed\n";
            $_SESSION['nameErr'] = $nameErr;
            $invalid = true;
        }
    }

    $email = $_POST["email"];
    //email info validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format\n";
        $_SESSION['emailErr'] = $emailErr;
        $invalid = true;
    } else {
        $_SESSION['email'] = $email;
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $_SESSION['passwordErr'] = $passwordErr;
        $invalid = true;
    } else {
        $password = isInjected($_POST["password"]);
    }

    if ($invalid == true) {
        header("Location:../signup.html");
    } else {
        $dao->addUser($firstName, $lastName, $email, $password);
        header("Location:../login.html");
    }
}
