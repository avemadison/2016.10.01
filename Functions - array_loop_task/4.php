<?php
/*4*/
function funk_3 ($arr)
{
    foreach ($arr as $item => $key){
        echo $item. ' '. $key. '<br>';
    }
}
//Пример выполнения кода 1
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
funk_3($arr);
echo '<br>';
//Пример выполнения кода 2
$arr2 = array('vinous'=>'бордовый', 'black'=>'черный','yellow'=>'желтый');
funk_3($arr2);