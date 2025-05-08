<?php
    session_start();
    if(isset($_SESSION["userName"])) {
        unset($_SESSION["userName"]);
    }
    echo "<script>location.href='session_page.php';</script>"
?>