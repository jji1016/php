<?php
    require_once "include/db.php";
?>
<?php
    $mode = $_POST["mode"];
    $num = $_POST["num"];
    $password = $_POST["password"];

    $sql =  "select password from board where num = $num";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $db_password = $row["password"];
    if($db_password==$password) {
        //echo "ok";
        if($mode=="delete") {
            echo "<script>location.href='delete_process.php?num=$num';</script>";
        } else {
            echo "<script>location.href='modify-form.php?num=$num';</script>";
        }
    } else {
        //echo "<script>alert('패스워드 확인해주세요.');location.href='password-form.php?num=$num&error=y';</script>";
        echo "<script>location.href='password-form.php?num=$num&error=y&mode=$mode';</script>";
    }
?>