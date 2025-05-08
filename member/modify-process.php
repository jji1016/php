<?php
require_once "include/db.php";

$userID = $_POST["userID"];
$userName = $_POST["userName"];
$userEmail = $_POST["userEmail"];
$password = "";

$sql = "update members set userid=?, username=?, useremail=? where userid=? and password=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $userID, $userName, $userEmail, $userID, $password);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result); //연관배열을 던져준다.
// print_r($user); // 연관 배열 출력


mysqli_stmt_close($stmt);
mysqli_close($conn);
?>