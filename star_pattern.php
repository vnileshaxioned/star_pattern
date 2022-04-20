<?php

echo "Print A <br><br>";

$n = 5;
for ($i = 0; $i <= $n; $i++) {
    for($j = 0; $j <= $n; $j++) {
        if(
            ($i != 0 and $i != 3 and $j > 0 and $j < $n)
            or ($i == 0 and $j > ($n -2))
            or ($i == 0 and $j < ($n -3))
        ) {
            echo "&nbsp;&nbsp;";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}



echo "<hr>";
echo "Print P <br><br>";

$n = 6;
for ($i = 0; $i <= $n; $i++) {
    for($j = 0; $j <= $n; $j++) {
        if(
            ($i != 0 and $i != 3 and $j > 0 and $j < $n)
            or ($i != 1 and $i != 2 and $j > ($n -1))
        ) {
            echo "&nbsp;&nbsp";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}

?>