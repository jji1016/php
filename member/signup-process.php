<?php
require_once "include/db.php";

$userID = $_POST["userID"];
$password = $_POST["password"];
$userName = $_POST["userName"];
$userEmail = $_POST["userEmail"];
$regdate = date("Y-m-d H:i:s");

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// $sql = "insert into members values(null, '$userID','$password','$userName','$userEmail','$regdate',9,0)";
// mysqli_query($conn, $sql);
$sql = "insert into members values (null,?,?,?,?,'$regdate',9,0)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $userID, $hashedPassword, $userName, $userEmail);
mysqli_stmt_execute($stmt);
mysqli_close($conn);
echo "<script>location.href='login.php';</script>";
?>