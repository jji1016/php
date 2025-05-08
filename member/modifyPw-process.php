<?php
require_once "include/session.php";
require_once "include/db.php";

if (!$userID) {
    echo "<script>alert('로그인이 필요'); location.href='login.php';</script>";
    exit;
}

$currentPw = $_POST["currentPw"];
$password = $_POST["password"];
$passwordConfirm = $_POST["passwordConfirm"];

$sql = "select * from members where userid = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $userID);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user) {
    if (password_verify($currentPw, $user["password"])) {
        if ($password != $passwordConfirm) {
            echo "<script>alert('수정할 비밀번호가 다릅니다.');location.href='modify.php';</script>";
            exit(); //안하면 밑에 코드실행됨
        }
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql_modify_pw = "update members set password = ? where userId=?";
        $stmt_modify_pw = mysqli_prepare($conn, $sql_modify_pw);
        mysqli_stmt_bind_param($stmt_modify_pw, "ss", $hashedPassword, $userID);
        mysqli_stmt_execute($stmt_modify_pw);
        $result = mysqli_stmt_affected_rows($stmt_modify_pw); //update문은 결과가 숫자로 반환

        if ($result > 0) {
            echo "<script>alert('비밀번호 변경 완료'); location.href='info.php';</script>";
        } else {
            echo "<script>alert('비밀번호 변경 실패'); location.href='modify.php';</script>";
        }
    } else {
        echo "<script>alert('비밀번호 일치 x'); location.href='modify.php';</script>";
    }
} else {
    echo "<script>alert('유저 x'); location.href='info.php';</script>";
}

?>