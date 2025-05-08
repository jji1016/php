<?php
session_start();
$userName = "";
$userID = "";
$userEmail = "";
$level = "";
$point = "";

if (isset($_SESSION["userName"])) {
    $userName = $_SESSION["userName"];
}
if (isset($_SESSION["userID"])) {
    $userID = $_SESSION["userID"];
}
if (isset($_SESSION["userEmail"])) {
    $userEmail = $_SESSION["userEmail"];
}
if (isset($_SESSION["level"])) {
    $level = $_SESSION["level"];
}
if (isset($_SESSION["point"])) {
    $point = $_SESSION["point"];
}
?>