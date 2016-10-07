<?php
/*8*/
function my_string ($arr)
{
    $str = '';
    foreach ($arr as $item)
    {
        $str .= '-'.$item;
    }
    echo $str;
}
//Пример выполнения кода 1
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
my_string($arr);
echo '<br>';
//Пример выполнения кода 2
$arr77 = [33,56,78,36,90];
my_string($arr77);
