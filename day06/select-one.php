<?php
    $servername = "localhost";
    $username = "jjang051";
    $password = "1234";
    $db = "sample02";
    $conn = mysqli_connect($servername,$username,$password,$db);
    if(!$conn) {
        die("연결오류 : ".mysqli_connect_error());
    }
    $sql = "select * from friend where num = 1";
    $result = mysqli_query($conn,$sql);

    //row를 반환하는데 컬럼명을 key로 반환한다. 배열이 떨어진다.
    // $row = mysqli_fetch_assoc($result);
    // echo "이름 : ".$row["name"]."<br>";
    // echo "전화번호 : ".$row["tel"]."<br>";
    // echo "주소 : ".$row["address"]."<br>";
    // echo "<hr>";

    $row = mysqli_fetch_row($result);
    echo "num : ".$row[0]."<br>";
    echo "이름 : ".$row[1]."<br>";
    echo "전화번호 : ".$row[2]."<br>";
    echo "주소 : ".$row[3]."<br>";
    echo "<hr>";

    

    
    
    mysqli_close($conn);
    //echo "연결 성공";
    //연관배열로 반환
    $person = array("name"=>"홍길동","age"=>25,"address"=>"서울");
    $person["name"];
?>