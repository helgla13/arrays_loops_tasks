<?php
$arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
foreach ($arr as $value){
    $month = date('F');
    if ($value == $month) {
        echo "<b>$value </b>";
    }
    else{
        echo "$value ";
    }
}