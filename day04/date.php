<?php
    //phpinfo();
    //date_default_timezone_set("Asia/Seoul"); //안하면 utc로 나옴
    $today = date("Y년 m월 d일 H:i:s");
    echo $today."<br>";

    $timestamp = time();  //1970 1/1 기준으로 흘러온 초 unix 기준으로 만들어짐
    echo $timestamp."<br>";  
    $current = date("Y-m-d H:i:s",$timestamp);
    echo $current."<br>";
    $afterOneMinute = date("Y-m-d H:i:s",$timestamp+(60*60)); //초 단위
    echo $afterOneMinute."<br>";
    $microtimestamp = microtime(true);  //1970 1/1 기준으로 흘러온 초 unix 기준으로 만들어짐
    echo $microtimestamp;

?>