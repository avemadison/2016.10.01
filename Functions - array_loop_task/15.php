<?php
/*15*/
function funk22 ($arr)
{
    $count = 0;
    foreach ($arr as $item)
    {
        $count++;
    }
    echo $count;
}
//Пример выполнения кода 1
$arr = [4, 2, 5, 19, 13, 0, 10];
funk22($arr);
echo '<br>';
//Пример выполнения кода 2
$arr88 = ['lol',23, 45, 'lil', 90, 56, 'lyl', 44, 92];
funk22($arr88);
