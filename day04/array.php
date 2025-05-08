<?php
    $animals = array("고양이","강아지","사자","호랑이");
    $total = count($animals);
    echo "배열의 갯수 : ".$total."<br>";
    array_push($animals,"곰");
    print_r($animals);
    echo "<br>";
    $poped_animal = array_pop($animals);
    echo $poped_animal;
    echo "<br>";
    print_r($animals);
    array_unshift($animals,"코알라");
    echo "<br>";
    print_r($animals);
    $shifted_animal = array_shift($animals);
    echo $shifted_animal;
    echo "<br>";
    sort($animals);
    print_r($animals);
    rsort($animals);
    print_r($animals); //만들어 쓸 함수가 없다....
    $nums = array(1,2,3,4,5,6,7,8,9,10,11,12,13);
    $total = array_sum($nums);
    $avg = $total / count($nums);
    echo "<br>";
    echo "합 : $total <br>";
    echo "평균 : $avg";
?>