<?php
/*1*/
function word_in_column ($a)
{
    foreach ($a as $b) {
        echo $b . '<br>';
    };

}
//Пример выполнения кода 1
$languages = ['html', 'css', 'php', 'js', 'jq'];
word_in_column($languages);
echo '<br>';
//Пример выполнения кода 2
$color = ['blue', 'yellow', 'black'];
word_in_column($color);

