<?php
require_once "include/session.php";
require_once "include/header.php";
?>

<div class="container">
    <h2>INFO</h2>
    <table class="table">
        <colgroup>
            <col style="width: 20%">
            <col>
        </colgroup>
        <tbody>
            <tr>
                <th>userID</th>
                <td><?= $userID ?></td>
            </tr>
            <tr>
                <th>userName</th>
                <td><?= $userName ?></td>
            </tr>
            <tr>
                <th>userEmail</th>
                <td><?= $userEmail ?></td>
            </tr>
            <tr>
                <th>level</th>
                <td><?= $level ?></td>
            </tr>
            <tr>
                <th>point</th>
                <td><?= $point ?></td>
            </tr>
        </tbody>
    </table>

    <div class="my-5 text-center">
        <a href="modify.php" class="btn btn-primary">회원정보 수정</a>
        <a href="delete.php" class="btn btn-danger">회원탈퇴</a>
    </div>

</div>

<?php
require_once "include/footer.php";
?>