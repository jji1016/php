<?php
    setcookie("userID","jjang051",time()+24*60*60);
    //echo "<script>location.href='cookie_page.php';</script>"
    header("Location: cookie_page.php");
    exit;
?>