<?php
session_start();
$_SESSION = array();
session_destroy();
/*
if (isset($_COOKIE["PHPSESSID"])) {
    setcookie("PHPSESSID", '', time() - 1800, '/');
}
*/
header("location:../_login/");



