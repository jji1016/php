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
mysqli_close($conn);
if ($user) {
    if (password_verify($password, $user["password"])) {
        $_SESSION["userID"] = $user["userId"];
        $_SESSION["userName"] = $user["userName"];
        $_SESSION["userEmail"] = $user["userEmail"];
        $_SESSION["level"] = $user["level"];
        $_SESSION["point"] = $user["point"];
        echo "<script> location.href='index.php';</script>";
    } else {
        echo "<script>location.href='login.php';</script>";
    }
} else {
    echo "<script>location.href='login.php';</script>";
}

?>