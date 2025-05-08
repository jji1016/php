<?php
    setcookie("userID","jjang051",time()-10000);
    header("Location: cookie_page.php");
    exit;
    //echo "<script>location.href='cookie_page.php';</script>"
?>