<h2>01</h2>
<?php
    
    function triangle_area($width,$height) {
        return ($width*$height)/2;
    }
    echo "10,20 삼각형의 넓이는 ".triangle_area(10,20);
?>
<hr>
<h2>02</h2>
<?php
    
    function sum($start,$end) {
        $sum=0;
        for($i=$start;$i<=$end;$i++) {
            $sum+=$i;
        }
        return $sum;
    }
    echo "1,10 의 합은 ".sum(1,10);
?>
<hr>
<h2>03</h2>
<?php
    function baesu_sum($num) {
        $sum=0;
        for($i=1;$i<=100;$i++) {
            if($i%$num==0) {
                $sum+=$i;
            }
        }
        return $sum;
    }
    echo "1,100 사이에 5의 배수의 합은 ".baesu_sum(5);
?>
<hr>
<h2>04</h2>
<?php
    function price($gubun, $age) {
        $money=0;
        if($gubun=="조조") {
            if($age<=18 || $age>=65 ) {
                $money=7000;
            } else {
                $money=9000;
            }
        } else {
            if($age<=18) {
                $money=10000;
            } else if($age>=65) {
                $money=7000;
            } else {
                $money=10000;
            }
        }
        return $money;
    }
    echo "조조 성인기준  영화비 : ".price("조조",30)."<br>";
    echo "일반 청소년기준  영화비 : ".price("일반",12)."<br>";
    echo "일반 시니어기준  영화비 : ".price("일반",70)."<br>";
?>
<hr>
<h2>06</h2>
<?php
    $nums =  array(1,2,3,4,748,748,788,565,676,787);
    for($i=0;$i<count($nums);$i++) {
        echo $nums[$i]."/";
    }
?>
<hr>
<h2>07</h2>
<?php
    $nums =  array(
        array(1,2,3,4,748,748,788,565,676,787),
        array(2,4,4,512,18,122,323,543,23,11),
        array(3434,232,5435,543,748,434,333,323,111,1212)
    );
    for($i=0;$i<count($nums);$i++) {
        $number = $i+1;
        echo $number." : ";
        for($j=0;$j<count($nums[$i]);$j++) {
            echo $nums[$i][$j]." ";
        }    
        echo "<br>";
    }
?>
<hr>
<h2>08</h2>
<?php
    $nums =  array();
    for($i=0;$i<30;$i++) {
        //$nums[] = rand(0,100);
        array_push($nums,rand(0,100));
    }
    for($i=0;$i<30;$i++) {
        echo $nums[$i]." / ";
    }
    $su = $woo = $mi = $yang = $ga = 0;
    for($i=0;$i<30;$i++) {
        if($nums[$i] >=90) {
            $su++;    
        }elseif($nums[$i] >=80) {
            $woo++;    
        }elseif($nums[$i] >=70) {
            $mi++;    
        }elseif($nums[$i] >=60) {
            $yang++;    
        } else {
            $ga++;   
        }
    }
    echo "수 : ".$su."명<br>";
    echo "우 : ".$woo."명<br>";
    echo "미 : ".$mi."명<br>";
    echo "양 : ".$yang."명<br>";
    echo "가 : ".$ga."명<br>";
?>
<hr>
<h2>08</h2>
<?php
    $seat =  array();
    for($i=0;$i<5;$i++) {
        $row = array();
        for($j=0;$j<10;$j++) {
            $row[] = rand(0,1);
        }
        $seat[] = $row;
    }
    for($i=0;$i<count($seat);$i++) {
        for($j=0;$j<count($seat[$i]);$j++) {
            if($seat[$i][$j]==0) {
                echo "o ";
            } else {
                echo "x ";
            }
        }
        echo "<br>";
    }
?>

