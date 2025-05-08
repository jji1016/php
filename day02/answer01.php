<?php
    $score = 85;
    if($score>90) {
        echo "시험점수 : ".$score."<br>";
        echo "등급 : 수";
    } elseif($score>80) {
        echo "시험점수 : ".$score."<br>";
        echo "등급 : 우";
    }elseif($score>70) {
        echo "시험점수 : ".$score."<br>";
        echo "등급 : 미";
    }elseif($score>60) {
        echo "시험점수 : ".$score."<br>";
        echo "등급 : 양";
    } else {
        echo "시험점수 : ".$score."<br>";
        echo "등급 : 가";
    }
?>