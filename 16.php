<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $value) {
    if ($value > 0 && ($value % 3) == 0) {
        echo "$value<br>";
    }
    else {
        echo "$value, ";
    }
}
