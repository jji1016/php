<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>변수</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;
        $c = $a + $b;
        echo $c;
        //kor 점90  eng 80 math 85
        // 총점 구하고 평균 구하고 출력
    ?>
    <?php
        $kor = 90;
        $eng = 80;
        $math = 85;
        $sum  = $kor+$eng+$math;
        $avg = $sum/3;
        $num = -120.345;
        $txt = "hello";
        $txt02 = 'hello';
        $x =  5 >= 3;
        $y =  5 <= 3;
        
        echo '<p>국어점수 : $kor</p>';
        echo "<p>국어점수 : $kor</p>";
        echo "<p>영어점수 : $eng</p>";
        echo "<p>수학점수 : $math</p>";
        echo "<p>총점 : $sum</p>";
        echo "<p>평균 : $avg</p>";
        var_dump($kor);
        echo "<br>";
        var_dump($txt);
        echo "<br>";
        var_dump($txt02);
        echo "<br>";
        var_dump($num);
        echo "<br>";
        var_dump($num);
        echo "<br>";
        var_dump($x);
        echo "<br>";
        var_dump($y);
        
    ?>
    
</body>
</html>