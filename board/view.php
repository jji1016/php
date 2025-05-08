<?php
    require_once "include/header.php";
    require_once "include/db.php";
?>
<?php
    if(isset($_GET["num"])) {
        $num = $_GET["num"];
    } else {
        $num = "";
    }

    $sql = "select * from board where num = $num";
    $result = mysqli_query($conn,$sql);
    $row =  mysqli_fetch_assoc($result);
    $name =  htmlspecialchars($row["name"]);
    $subject =  htmlspecialchars($row["subject"]);
    $content =  str_replace("\n","<br>",htmlspecialchars($row["content"]));
    $regdate =  $row["regdate"];
    //row를 반환하는데 컬럼명을 key로 반환한다. 배열이 떨어진다.
?>
    <h2 class="my-5">글보기</h2>
    <table class="table">
        <colgroup>
            <col style="width:10%" />
            <col style="width:40%" />
            <col style="width:150px" />
            <col style="width:40%" />
        </colgroup>
        <tbody>
            <tr> 
                <td>subject</td>
                <td colspan="3"><?=$subject?></td>
            </tr>
            <tr> 
                <td>name</td>
                <td><?=$name?></td>
                <td>date</td>
                <td><?=$regdate?></td>
            </tr>
            <tr> 
                <td>content</td>
                <td colspan="3"><?=$content?></td>
            </tr>
        </tbody>
    </table>
    <div class="my-5 text-center">
        <a href="password-form.php?mode=modify&num=<?=$num?>" class="btn btn-primary">MODIFY</a>
        <a href="password-form.php?mode=delete&num=<?=$num?>" class="btn btn-danger">DELETE</a>
        <a href="list.php" class="btn btn-primary">LIST</a>
    </div>
<?php
    require_once "include/footer.php";
?>
