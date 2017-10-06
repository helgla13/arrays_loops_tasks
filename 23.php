<form action="" method="post">
    <p>
        <span>Введите число</span>
        <input type="text" name="number">
    </p>
    <p>
        <button>Ok</button>
    </p>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];
    if(is_numeric($number)){
        echo "Введенное число - $number<br>";
    }
    else{
        exit ("Не число<br>");
    }
}
$count = strlen($number);
if ($count>1){
    $sum = 0;
    $arr = str_split($number);
    for($a = 0; $a < $count; $a++)
        $sum += $arr[$a];
    echo "Сумма введенных чисел: $sum";
}
else{
    echo "Вы ввели одно число";
}
