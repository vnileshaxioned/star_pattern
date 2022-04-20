<?php

echo "Print A <br><br>";

for ($i = 0; $i <= 5; $i++) {
    for($j = 0; $j <= 5; $j++) {
        if(
            ($i != 0 and $i != 3 and $j > 0 and $j < 5)
            or ($i == 0 and $j > 3)
            or ($i == 0 and $j < 2)
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

for ($i = 0; $i <= 5; $i++) {
    for($j = 0; $j <= 5; $j++) {
        if(
            ($i != 0 and $i != 3 and $j > 0 and $j < 5)
            or ($i != 1 and $i != 2 and $j > 4)
        ) {
            echo "&nbsp;&nbsp";
        } else {
            echo "*";
        }
    }
    echo "<br>";
}

?>