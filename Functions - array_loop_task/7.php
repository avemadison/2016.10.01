<?php
/*7*/
function output_from_3_to_10 ($arr)
{
    foreach ($arr as $item)
    {
        if($item > 3 && $item < 10) {
            echo $item. '.';
        }
    }
};
//Пример выполнения кода 1
$arr = [2, 5, 9, 15, 0, 4];
output_from_3_to_10($arr);
echo '<br>';
//Пример выполнения кода 2
$arr2 = [5, 6, 7, 19, 0, 11];
output_from_3_to_10($arr2);