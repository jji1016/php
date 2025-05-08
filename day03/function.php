<?php
    function hello() {
        for($i=1;$i<=10;$i++) {
            echo "hello<br>";
        }
    }
    function plus($a,$b) {
        $c =  $a+$b;
        echo $c."<br>";
    }
    function return_plus($a,$b) {
        $c =  $a+$b;
        return $c;
    }
    plus(10,20);
    echo return_plus(30,40)."<br>";
    
    function  circle_area($radius) {
        return $radius*$radius*3.14;
    }
    echo "반지름 10인 원의 면적은 : ".circle_area(10);
    //원의 면적 구하는 함수를 만들어서 값을 리턴
?>