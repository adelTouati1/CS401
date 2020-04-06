<?php
require_once('classes/Dao.php');
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
$location = "";
$cameraBrand= "";
$lenseSize = "";
$focus = "";
$Description = "";
$dao = new Dao();
$invalid = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // location
    if (empty($_POST["location"])) {
        $locationErr = "location is required";
        $_SESSION['locationErr'] = $locationErr;
        $invalid = true;
    } else {
        $location = isInjected($_POST["location"]);
        $_SESSION['location'] = $location;
   
    }

    // cameraBrand
    if (empty($_POST["cameraBrand"])) {
        $cameraBrandErr = "Camera brand is required";
        $_SESSION['nameErr'] = $nameErr;
        $invalid = true;
    } else {
        $lastName = isInjected($_POST["cameraBrand"]);
        $_SESSION['cameraBrand'] = $cameraBrand;
    }

    // lenseSize
    if (empty($_POST["lenseSize"])) {
        $lenseSizeErr = "Lense Size is required";
        $_SESSION['lenseSizeErr'] = $lenseSizeErr;
        $invalid = true;
    } else {
        $lenseSize = isInjected($_POST["lenseSize"]);
        $_SESSION['lenseSize'] = $lenseSize;
    }

    // focus
    if (empty($_POST["focus"])) {
        $focusErr = "focus is required";
        $_SESSION['focusErr'] = $focusErr;
        $invalid = true;
    } else {
        $focus = isInjected($_POST["focus"]);
        $_SESSION['focus'] = $focus;
    }

      // Description
        $Description = isInjected($_POST["Description"]);
        $_SESSION['Description'] = $Description;
    

}
