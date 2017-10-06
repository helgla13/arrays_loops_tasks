<?php
$n = 1000;
$result=$n/2;
$num=1;
echo "$result<br>";
while ($result >= 50){
    $result = $result /2;
    if ($result <50)
        break;
    $num++;
    echo "$result<br>";
}
echo "Всего итераций: $num";