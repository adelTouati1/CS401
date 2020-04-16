<?php
session_start();
if (isset($_SESSION['AUTH'])) {
    $_SESSION['AUTH'] = FALSE;
}

header("Location:index.php");