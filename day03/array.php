<?php
    $score = array(75,85,93,87,92,"apple");

    echo $score[0]."<br>";
    echo $score[1]."<br>";
    echo $score[2]."<br>";
    echo $score[3]."<br>";
    echo $score[4]."<br>";
    echo $score[5]."<br>";
    echo "<hr>";
    for($i=0;$i<count($score);$i++) {
        echo $score[$i]."<br>";
    }
    echo "<hr>";
    foreach($score as $item) {
        echo $item."<br>";
    }
    echo "<hr>";
    foreach($score as $index => $item) {
        echo "[$index] => $item<br>";
    }
?>
<hr>
<?php
    //연관배열  map
    $members = array(
        array(
          "userid"=>"jjang051",
          "password"=>"1234",
          "username"=>"장성호",
          "age"=>30
        ),
        array(
            "userid"=>"hong",
            "password"=>"1234",
            "username"=>"홍길동",
            "age"=>35
          ),
        array(
        "userid"=>"son",
        "password"=>"1234",
        "username"=>"손흥민",
        "age"=>32
        )
    );
    /*
    echo "userid : ".$members[0]["userid"]."<br>";
    echo "password : ".$members[0]["password"]."<br>";
    echo "username : ".$members[0]["username"]."<br>";
    echo "age : ".$members[0]["age"];
    echo "<hr>";
    echo "userid : ".$members[1]["userid"]."<br>";
    echo "password : ".$members[1]["password"]."<br>";
    echo "username : ".$members[1]["username"]."<br>";
    echo "age : ".$members[1]["age"];
    echo "<hr>";
    echo "userid : ".$members[2]["userid"]."<br>";
    echo "password : ".$members[2]["password"]."<br>";
    echo "username : ".$members[2]["username"]."<br>";
    echo "age : ".$members[2]["age"];
    echo "<hr>";
    */
    foreach($members as $member) {
        echo "userid : ".$member["userid"]."<br>";
        echo "password : ".$member["password"]."<br>";
        echo "username : ".$member["username"]."<br>";
        echo "age : ".$member["age"];
        echo "<hr>";
    }
    for($i=0;$i<count($members);$i++) {
        echo "userid : ".$members[$i]["userid"]."<br>";
        echo "password : ".$members[$i]["password"]."<br>";
        echo "username : ".$members[$i]["username"]."<br>";
        echo "age : ".$members[$i]["age"];
        echo "<hr>";
    }
?>




