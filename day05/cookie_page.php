<h2>쿠키로 로그인</h2>
<?php
    if(!isset($_COOKIE["userID"])) {
        echo "<a href='cookie_login.php'>로그인</a>";
    } else {
        echo "<a href='cookie_logout.php'>로그아웃</a>";
    }
?>