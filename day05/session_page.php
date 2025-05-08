<h2>세션 로그인</h2>
<?php
    session_start();
    if(!isset($_SESSION["userName"])) {
        echo "<a href='session_login.php'>로그인</a>";
    } else {
        echo "<a href='session_logout.php'>로그아웃</a>";
    }
?>