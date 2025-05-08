<?php
    $pilgi = 65;
    $silgi =  90;
    $result = "불합격";
    if($pilgi >=70 && $silgi >= 70 ) {
        $result = "합격";
    }
    echo "필기 : ".$pilgi."점<br>";
    echo "실기 : ".$silgi."점<br>";
    echo "결과 : ".$result."<br>";

    $num=10;
    if($num%2==0) {
        echo $num."은 짝수";
    } else {
        echo $num."은 홀수";
    }
    echo "<br>";
    $num02=11;
    echo $num02."은 ".($num02%2==0?"짝수":"홀수");
?>