<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 17;
        $b = $a % 10;
        echo $b;
        echo "<br>";
        $b = $b % 3;
        echo $b;
        echo "<br>";

        $c = 2 % 5;
        echo $c;
        echo "<br>";

        $d=10;
        $d++;
        echo $d;
        echo "<br>";


        $e=10;
        echo ++$e;
        echo "<br>";
        echo $e;
        echo "<br>";

        $name = "홍길동";
        echo $name."님 반갑습니다 <br>";
        $name02 = "사자";
        $name03 = "고양이";
        $changeName = $name02."/".$name03;
        echo $changeName."<br>";

        $name04  = "사과";
        $name04  .=  "쥬스";
        echo $name04."<br>";

    ?>
</body>
</html>