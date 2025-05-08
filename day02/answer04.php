<?php
    echo "=================<br>";
    echo "인치  /  센치미터<br>";
    echo "=================<br>";

    $inch = 10;
    while($inch<=20) {
        $cm = $inch*2.54;
        //echo $inch."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$cm."<br>";
        echo $inch."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$cm."<br>";
        $inch+=2;
    }

?>