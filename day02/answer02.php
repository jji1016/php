<?php
    $num=100;
    while($num<=200) {
        if($num%2==1) {
            echo "$num ";
        }
        $num++;
    }
?>
<hr>
<?php
    for($num=100;$num<=200;$num++){
        if($num%2==1) {
            echo $num."  ";
        }
    }
?>