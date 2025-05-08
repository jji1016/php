<?php
require_once "include/header.php"
    ?>

<div class="container">
    <h2>SIGN UP</h2>
    <form action="signup-process.php" method="post">
        <div class="row mb-3">
            <label for="userID" class="col-sm-2 col-form-label">User ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userID" name="userID">
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="row mb-3">
            <label for="passwordConfirm" class="col-sm-2 col-form-label">Password Confirm</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm">
            </div>
        </div>
        <div class="row mb-3">
            <label for="userName" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userName" name="userName">
            </div>
        </div>
        <div class="row mb-3">
            <label for="userEmail" class="col-sm-2 col-form-label">User Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userEmail" name="userEmail">
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