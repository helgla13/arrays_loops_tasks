<?php
$arr = array();
for ($a=0; $a<=100; $a++){
    $arr[] = rand(0, 100);
}
echo "<pre>";
print_r($arr);
echo "<pre>";
$min = min($arr);
$max = max($arr);
foreach ($arr as $m=>$value){
    if ($value == $min){
        echo "Минимальное число массива: $value<br>";
        $arr[$m] = $max;
    }
    if($value == $max){
        echo "Максимальное число массива: $value<br>";
        $arr[$m] = $min;
    }
}
echo "<pre>";
print_r($arr);
echo "<pre>";