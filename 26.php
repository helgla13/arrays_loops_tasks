<?php
$arr = array();
for ($a=1; $a<=100; $a++){
    $arr[] = rand(1, 100);
}
echo "<pre>";
print_r($arr);
echo "<pre>";
foreach ($arr as $m => $value){
    if ($value >= 1  && $value % 2 != 0){
        echo "Нечетное число: $value <br>";
    }
    if ($value >= 1 && $value % 2 == 0){
        echo "Четное число: $value<br>";
        $arr1[] = $value;
    }
}
echo "<pre>";
print_r($arr1);
echo "<pre>";
$result = array_product($arr1);
echo $result;