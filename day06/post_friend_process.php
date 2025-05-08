<?php

    $user_name = $_POST["userName"];
    $address = $_POST["address"];
    $tel = $_POST["tel"];
    $servername = "localhost";
    $username = "jjang051";
    $password = "1234";
    $db = "sample02";
    $conn = mysqli_connect($servername,$username,$password,$db);
    mysqli_begin_transaction($conn);
    if(!$conn) {
        die("연결오류 : ".mysqli_connect_error());
    }
    $sql = "insert into friend values (null,'$user_name','$tel','$address')";
    
    $result = mysqli_query($conn,$sql);
    mysqli_commit($conn);
    if($result) {
        echo "insert 성공";
    } else {
        echo "insert 실패";
    }
    mysqli_close($conn);
    //echo "연결 성공";
?>