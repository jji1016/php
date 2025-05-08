<?php
    session_start();
    if(!isset($_SESSION["userName"])) {
        $_SESSION["userName"]="장성호";
    }
    echo "<script>location.href='session_page.php';</script>"
?>