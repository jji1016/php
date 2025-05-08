
<?php
    require_once "include/db.php";
    $num = $_GET["num"];
    $sql = "delete from board where num=$num";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    if($result) {
        echo "<script>alert('삭제되었습니다.');location.href='list.php';</script>";
    }
?>