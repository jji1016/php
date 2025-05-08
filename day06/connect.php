<?php
    $servername = "localhost";
    $username = "jjang051";
    $password = "1234";
    $db = "sample02";
    $conn = mysqli_connect($servername,$username,$password,$db);
    if(!$conn) {
        die("연결오류 : ".mysqli_connect_error());
    }
    $sql = "create table friend(
        num int not null auto_increment,
        name varchar(50) not null,
        tel  char(15) not null,
        address  varchar(100),
        primary key(num)
    )"; //찬구 한명 insert
    $result = mysqli_query($conn,$sql);
    if($result) {
        echo "friend table 생성완료";
    } else {
        echo "friend table 생성오류";
    }
    mysqli_close($conn);
    //echo "연결 성공";
?>