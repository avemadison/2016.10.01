<?php
/*2*/
function get_sum ($arr) {
    $result = 0;
    foreach ($arr as $value)
        $result += $value;
    return $result;
}
//Пример выполнения кода 1
$arr = [1, 20, 15, 17, 24, 35];
echo get_sum($arr);
echo '<br>';
//Пример выполнения кода 2
$numeric = [4, 26, 98, 27, 94, 78];
echo get_sum($numeric);

