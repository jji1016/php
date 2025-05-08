<?php
    $i=1;
    while($i<=10) {
        echo $i."<br>";
        $i++;
    }
?>
<hr>
<?php
    $i=1;
    $sum = 0;
    while($i<=10) {
        $sum+=$i;
        $i++;
    }
    echo "합계 : ".$sum;
?>
<hr>
<?php
    for($i=1;$i<=10;$i++) {
        echo $i."<br>";
    }
?>
<hr>
<?php
    $string="";
    $string.="<table border='1'><tbody>";
    for($i=1;$i<=9;$i++) {
        $string.="<tr>";
        for($j=2;$j<=9;$j++) {
            $result = $i*$j;
            $string.="<td>{$j}x{$i}={$result}</td>";
        }
        $string.="</tr>";
    }
    $string.="</table>";
    echo $string;
?>
<hr>

