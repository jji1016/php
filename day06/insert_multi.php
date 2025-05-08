<?php
    $servername = "localhost";
    $username = "jjang051";
    $password = "1234";
    $db = "sample02";
    $conn = mysqli_connect($servername,$username,$password,$db);
    if(!$conn) {
        die("연결오류 : ".mysqli_connect_error());
    }
    $sql = "insert into friend values (null,'마이키','010-1111-1111','서울시 서초구');";
    $sql .= "insert into friend values (null,'고길동','010-2222-2222','서울시 은평구');";
    $sql .= "insert into friend values (null,'둘리','010-3333-3333','서울시 은평구');";
    $result = mysqli_multi_query($conn,$sql);
    if($result) {
        echo "insert 성공";
    } else {
        echo "insert 실패";
    }
    mysqli_close($conn);
    //echo "연결 성공";
?>