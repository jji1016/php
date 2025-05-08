<?php
require_once "include/session.php";
require_once "include/header.php";
?>

<div class="container">
    <h2>DELETE</h2>
    <form action="delete-process.php" method="post">
        <div class="row mb-3">
            <label for="userID" class="col-sm-2 col-form-label">User ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userID" name="userID" value="<?= $userID ?>" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="password" name="password">
            </div>
        </div>

        <div class="my-5 text-center">
            <a href="info.php" class="btn btn-primary">이전으로</a>
            <button class="btn btn-danger">탈퇴</button>
        </div>
    </form>
</div>

<?php
require_once "include/footer.php";
?>