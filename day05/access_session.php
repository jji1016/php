<?php
    session_start();
    if(isset($_SESSION["userName"])) {
        echo $_SESSION["userName"]."님 방가방가";
    } else {
        echo "로그인 먼저 하세요";
    }
    
?>