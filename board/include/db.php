<?php
    $servername = "localhost";
    $username = "jongin";
    $password = "1234";
    $db = "sample";
    $conn = mysqli_connect($servername,$username,$password,$db);
    
    if(!$conn) {
        die("연결오류 : ".mysqli_connect_error());
    }
?>