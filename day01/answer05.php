<h2>입장료 계산하기</h2>
<?php
    $child = 5000;
    $num01 = 3;
    $adult = 8000;
    $num02 = 2;

    $total =  $child*$num01+$adult*$num02;

    echo "소인 입장료 : ".$child."원<br>";
    echo "소인 몇명 : ".$num01."명<br>";
    echo "대인 입장료 : ".$adult."원<br>";
    echo "대인 몇명 : ".$num02."명<br>";
    echo "총합 : ".$total."원<br>";
?>