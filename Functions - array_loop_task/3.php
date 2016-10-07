<?php
/*3*/
function sum_of_squares ($arr)
{
    $result = 0;
    foreach ($arr as $item)
        $result += $item * $item;
    return $result;
}
//Пример выполнения кода 1
$arr = [26, 17, 136, 12, 79, 15];
echo sum_of_squares($arr);
echo '<br>';
//Пример выполнения кода 2
$arr2 = [5, 7, 56, 72, 79, 45];
echo sum_of_squares($arr2);

