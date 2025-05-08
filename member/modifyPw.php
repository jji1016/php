<?php
require_once "include/header.php"
    ?>

<div class="container">
    <h2>SIGN UP</h2>
    <form action="modifyPw-process.php" method="post">
        <div class="row mb-3">
            <label for="currentPw" class="col-sm-2 col-form-label">현재 비밀번호</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="currentPw" name="currentPw">
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">수정할 비밀번호</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="row mb-3">
            <label for="passwordConfirm" class="col-sm-2 col-form-label">비밀번호 확인</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm">
            </div>
        </div>
        <div class="my-5 text-center">
            <button class="btn btn-primary">SIGN UP</button>
        </div>
    </form>
</div>

<?php
require_once "include/footer.php"
    ?>