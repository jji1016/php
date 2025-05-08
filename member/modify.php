<?php
require_once "include/header.php";
?>

<div class="container">
    <h2>INFO</h2>
    <form action="modify-process.php" method="post">
        <div class="row mb-3">
            <label for="userID" class="col-sm-2 col-form-label">User ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userID" name="userID" value="<?= $userID ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="userName" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userName" name="userName" value="<?= $userName ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="userEmail" class="col-sm-2 col-form-label">User Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userEmail" name="userEmail" value="<?= $userEmail ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="level" class="col-sm-2 col-form-label">level</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="level" name="level" value="<?= $level ?>" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="point" class="col-sm-2 col-form-label">point</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="point" name="point" value="<?= $point ?>" readonly>
            </div>
        </div>

        <div class="my-5 text-center">
            <a href="info.php" class="btn btn-primary">이전으로</a>
            <button class="btn btn-primary">수정</button>
            <a href="modifyPw.php" class="btn btn-primary">비밀번호 변경</a>
        </div>
    </form>
</div>

<?php
require_once "include/footer.php";
?>