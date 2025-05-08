<?php
require_once "include/session.php";
require_once "include/db.php";

$userID_P = $_POST["userID"];
$userName_P = $_POST["userName"];
$userEmail_P = $_POST["userEmail"];

$sql = "update members set userId=?, userName=?, userEmail=? where userId=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $userID_P, $userName_P, $userEmail_P, $userID);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_affected_rows($stmt); //update문은 결과가 숫자로 반환
mysqli_stmt_close($stmt);
mysqli_close($conn);

if ($result > 0) {
    $_SESSION["userID"] = $userID_P;
    $_SESSION["userName"] = $userName_P;
    $_SESSION["userEmail"] = $userEmail_P;
    echo "<script>alert('회원정보 수정 완료'); location.href='info.php';</script>";
} else {
    echo "<script>alert('변경 내용 x'); location.href='modify.php';</script>";
}
?>