<?php
require_once "include/session.php";
require_once "include/db.php";

$userID = $_POST["userID"];
$password = $_POST["password"];

$sql = "select * from members where userid = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $userID);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result); //연관배열을 던져준다.
// print_r($user); // 연관 배열 출력

mysqli_stmt_close($stmt);

if ($user) {
    if (password_verify($password, $user["password"])) {
        $sql_del = "delete from members where userId=?";
        $stmt_del = mysqli_prepare($conn, $sql_del);
        mysqli_stmt_bind_param($stmt_del, "s", $userID);
        $result = mysqli_stmt_execute($stmt_del);

        mysqli_stmt_close($stmt_del);
        mysqli_close($conn);
        if ($result) {
            session_unset();
            session_destroy();
            echo "<script>alert('회원탈퇴 완료'); location.href='index.php';</script>";
        } else {
            echo "<script>alert('알 수 없는 오류 발생'); history.back();</script>";
        }
    } else {
        mysqli_close($conn);
        echo "<script>alert('비밀번호 일치 x'); location.href='delete.php';</script>";
    }
} else {
    mysqli_close($conn);
    echo "<script>alert('유저 x'); location.href='delete.php';</script>";
}
?>