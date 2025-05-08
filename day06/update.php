<?php
    $servername = "localhost";
    $username = "jjang051";
    $password = "1234";
    $db = "sample02";
    $conn = mysqli_connect($servername,$username,$password,$db);
    if(!$conn) {
        die("연결오류 : ".mysqli_connect_error());
    }
    $sql = "update friend set name = '또치' where num = 1";
    $result = mysqli_query($conn,$sql);
    if($result) {
        echo "수정완료";
    } else {
        echo "수정실패 : ".mysqli_error($conn);
    }
    
    
    mysqli_close($conn);
    //echo "연결 성공";
    //연관배열로 반환
    
?>