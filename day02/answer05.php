<?php
    $string ="";
    $string.="<table border='1'>
        <thead>
            <tr>
                <th>달러</th>
                <th>원화</th>
                <th>유로</th>
            </tr>
        </thead>
        <tbody>";
        for($dollar=10;$dollar<=20;$dollar+=2) {
            $won = $dollar*1450;
            $euro = $dollar*1800;
            $string.="<tr>
                <td>${dollar}</td>
                <td>${won}</td>
                <td>${euro}</td>
            </tr>";
        }
        $string.="</tbody></table>";
        echo $string;
?>