<?php
$row = rand(1,10);
$cols = rand(1,10);
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo "<table border= '1'><br>";
for ($a = 1; $a <= $row; $a++) {
    echo "<tr><br>";
    for ($b = 1; $b <= $cols; $b++) {
        $num = rand(1,50);
        $c = $colors[rand(0,count($colors)-1)];
        echo "<td style='background-color:{$c}'>$num</td>";
    }
    echo "</tr>";
}
echo "</table>";