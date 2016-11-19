<?php
error_reporting(E_ALL);

function __autoload($className)
{
    $file = "classes/{$className}.php";
    
    if (!file_exists($file)) {
        die("{$className} not found");
    }
    
    require $file;
}



$circle = new Circle();


// $h = new Test();
// $h->blah();

// foreach ($h as $property => $value) {
//             echo "{$property} {$value}";
//         }


// function getCount()
// {
//     return Count::$objectsCount;
// }

// $c1 = new Count();
// // $c2 = new Count();
// // $c3 = new Count();
// // $c4 = new Count();
// // unset($c4);

// // $c5 = clone $c3;

// echo getCount();



// $human = new Human('Ivan', 'Ivanchenko', '1987', 'Kharkiv');

// $human2 = clone $human;

// $human->firstName = '3333';

// var_dump($human, $human2);


//$employee = new Employee('Ivan', 'Ivanchenko', '1987', 'Kharkiv', 'Office manager', 'super office', '100500');
// echo $employee->getEmployeeInfo();
// echo $employee->test();
// var_dump($human);


// $h1 = new Human('Mike', 25, 'New York');
// $h2 = new Human('John', 35, 'Sydney');

