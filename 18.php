<?php
$arr = array('понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье');
foreach ($arr as $days){
    if ($days === 'суббота' or $days === 'воскресенье') {
        echo "<b>$days </b>";
    }
    else {
        echo "$days ";
    }
}
