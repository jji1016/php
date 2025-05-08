<?php
    require_once "include/header.php";
?>
    <h2 class="my-5">글쓰기</h2>
    <form action="insert_process.php" method="post">
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="row mb-3">
            <label for="subject" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
        </div>
        <div class="row mb-3">
            <label for="content" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="content" name="content" rows="10"></textarea>
            </div>
        </div>
        <div class="my-5 text-center">
            <button class="btn btn-primary">CONFIRM</button>
            <a href="list.php" class="btn btn-primary">LIST</a>
        </div>
    </form>
<?php
    require_once "include/footer.php";
?>
