<?php
    $num=1;
    $num02 = 0;
    while($num<=100) {
        if($num%3==0) {
            echo "$num  ";
            $num02++;
            if($num02 % 10==0) {
                echo "<br>";
            }
        }
        $num++;
    }
?>
<hr>
<?php
    $num=300;
    $num02 = 0;
    for($num=300;$num<=350;$num++) {
        if($num%5!=0) {
            echo "$num  ";
            $num02++;
            if($num02%10==0) {
                echo "<br>";
            }
        }
    }
?>