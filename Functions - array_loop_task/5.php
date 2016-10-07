<?php
/*5*/
function name_salary ($arr)
{
    foreach ($arr as $name => $salary)
    {
        echo $name." - зарплата ". $salary. " долларов <br>";
    }
}
//Пример выполнения кода 1
$arr4 = ['Коля' => 200, 'Вася' => 300, 'Петя' => 400];
name_salary($arr4);
echo '<br>';
//Пример выполнения кода 1
$arr5 = ['Миша' => 100, 'Саша' => 250, 'Маша' => 600];
name_salary($arr5);