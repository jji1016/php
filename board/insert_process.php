<?php

    require_once "include/db.php";

    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $password = $_POST["password"];
    $content = $_POST["content"];
    $regdate = date("Y-m-d H:i");




    
    
    $sql = "insert into board (num,name,subject,password, content,regdate) values (null,'$name','$subject','$password','$content','$regdate')";
    
    $result = mysqli_query($conn,$sql);
    
    if($result) {
        echo "insert 성공";
    } else {
        echo "insert 실패";
    }
    mysqli_close($conn);
    //echo "연결 성공";
    echo "<script>location.href='list.php';</script>";
?>