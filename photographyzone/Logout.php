<?php
session_start();
if (isset($_SESSION['AUTH'])) {
    $_SESSION['AUTH'] = FALSE;
}
session_unset();
session_destroy();
header("Location:index.php");