<?php
session_start();
$_SESSION["first_name"] = null;
$_SESSION["last_name"] = null;
$_SESSION["email"] = null;
$_SESSION["id"] = null;
$_SESSION["role"] = null;
header("Location:/test1/homepage.php");
