<?php
$arr = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday');
foreach ($arr as $value){
    $days = date('l');
    if ($value == $days){
        echo "<i>$value </i>";
    }
    else {
        echo "$value ";
    }
}