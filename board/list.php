<?php
    require_once "include/header.php";
    require_once "include/db.php";
?>
<?php
    $sql = "select * from board";
    $result = mysqli_query($conn,$sql);

    //row를 반환하는데 컬럼명을 key로 반환한다. 배열이 떨어진다.
?>
    <h2 class="my-5">리스트</h2>
    <table class="table">
        <colgroup>
            <col style="width:120px" />
            <col  />
            <col style="width:150px" />
            <col style="width:150px" />
        </colgroup>
        <thead>
            <tr>
                <th>no</th>
                <th>subject</th>
                <th>name</th>
                <th>date</th>
            </tr>   
        </thead>
        <tbody>
            
            <?php
            /*
            while($row = mysqli_fetch_assoc($result)) {
                echo "
                <tr>
                    <td>{$row['num']}</td>
                    <td>{$row['subject']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['regdate']}</td>
                </tr>";
            }
                */
            ?>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr> 
                    <td><?=$row["num"]?></td>
                    <td><a href="view.php?num=<?=$row["num"]?>"><?=htmlspecialchars($row["subject"])?></a></td>
                    <td><?=htmlspecialchars($row["name"])?></td>
                    <td><?=$row["regdate"]?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="my-5"><a href="insert.php" class="btn btn-primary">WRITE</a></div>
    
<?php
    require_once "include/footer.php";
?>
