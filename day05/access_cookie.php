<?php
    if(isset($_COOKIE["userName"])) {
        echo $_COOKIE["userName"]."님 반갑습니다";
    } else {
        echo "로그인 먼저 하세요";
    }
?>