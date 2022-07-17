<?php
    $s = 6;$n=5;
    for($i = 0; $i < $s; $i++){
        for($j = 0; $j < $s-$i - 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k < 2 * $i + 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
    for($i = 0; $i <$n; $i++){
        for($j = 0; $j <$i+1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k < 2 * ($n- $i) - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
?>