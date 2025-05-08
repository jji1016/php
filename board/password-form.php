<?php
    require_once "include/header.php";
?>
<?php
    //2개 mode, num
    $mode = "";
    $num="";
    $error="";
    if(isset($_GET["mode"])) {
        $mode = $_GET["mode"];
    }
    if(isset($_GET["num"])) {
        $num = $_GET["num"];
    }
    if(isset($_GET["error"])) {
        $error = $_GET["error"];
    }
    
?>
    <h2 class="my-5">비밀번호</h2>
    <?php
        if($error=="y") {
            echo "<p class='alert'>비밀번호 확인해 주세요.</p>";
        }
    ?>
    <form action="password-process.php" method="post">
        <input type="hidden" name="num" value="<?=$num?>">
        <input type="hidden" name="mode" value="<?=$mode?>">
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="my-5 text-center">
            <button class="btn btn-primary">CONFIRM</button>
        </div>
    </form>
<?php
    require_once "include/footer.php";
?>
