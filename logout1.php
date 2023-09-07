<?php
include("connect.php");
//error_reporting(0);
session_start(); //Start the current session
session_destroy(); //Destroy it! So we are logged out now
session_unset();
header("Location:user.html?msg=Successfully Logged out"); // Move back to login.php with a logout message
//include("finallogin.php");
?>