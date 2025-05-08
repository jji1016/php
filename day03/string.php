<?php
    $str = "hello php";
    echo $str."길이 : ".strlen($str)."<br>"; 
    echo $str."에서 php의 시작위치 : ".strpos($str,"php")."<br>"; 
    echo $str."에서 hello 잘라내기 : ".substr($str,0,5)."<br>"; 
    echo "Hello PHP을 소문자로 : ".strtolower("Hello PHP")."<br>"; 
    echo "hello php을 대문자로 : ".strtoupper("hello php")."<br>"; 
    echo "I like dog에서 dog을 cat으로 : ".str_replace("dog","cat","I like dog")."<br>"; 
    echo "&nbsp;&nbsp;&nbsp;hello php&nbsp;&nbsp;&nbsp에서 공백 제거 : ".trim("   hello php   ")."<br>"; 
    $str = "I like php"; 
    if(str_contains($str,"like")) {
        echo $str."에는 like가 포함되어 있습니다.<br>";
    }
    echo str_repeat("*",10)."<br>";
    $userID = "jjang051"; //jj******
    echo substr($userID,0,2).str_repeat("*",strlen($userID)-2);
?>