<?php
session_start();
foreach ($_SESSION as $key => $value) {
    unset($_SESSION[$key]);
}
$_SESSION["user_logged"]= false;
echo "Redirect, attendez ";
header("refresh:1;url=Log-in/index.php");