<?php

function prints($data) {
    echo $data . '<br>';
    return;
}

//----------TASK 1-------------
$users = [
    [
        'id' => 1,
        'name' => 'Иван'
    ],
    [
        'id' => 2,
        'name' => 'Василий'
    ]
];

function pluck(array $arr, string $key) : array {
    $newArr = [];
    foreach ($arr as $childArr) {
        array_push($newArr, $childArr[$key]);
    }
    return $newArr;
}
prints(var_dump(pluck($users, 'name')));

//----------TASK 2-------------
$arr = [26, 17, 136, 12, 79, 15];
function getSumSquares(array $arr) :int {
    $sum = 0;
    foreach ($arr as $value) {
        $sum += pow($value, 2);
    }
    return $sum;
}
prints(getSumSquares($arr));

//----------TASK 3-------------
$numbers = [];
for ($i = 1; $i <= 112; $i = $i+3)
{
    array_push($numbers, $i);
}

prints(var_dump($numbers));

//----------TASK 4-------------
function getOrder(string $str) :string {
    $arr = explode(" ", $str);
    sort($arr);
    return implode($arr, " ");
}

prints(getOrder('ноты акустика гитара'));

//----------TASK 5-------------
$arr = [1, 5, 7, 1, 3];
function isSameAvailable(array $arr) :bool {
    $tempArr = [];
    foreach ($arr as $value) {
        if (array_search($value, $tempArr) === false) {
            array_push($tempArr,$value);
        }
        else {
            return true;
        }
    }
    return false;
}
prints(var_dump(isSameAvailable($arr)));

//----------TASK 6-------------
$arr = [];
for($i = 5; $i <= 1000; $i++) {
    array_push($arr,$i);
}
$arr2 = array_map(function($value){
    return $value * 2;
},$arr);
for ($i = 0; $i <= 4; $i++){
    prints($arr2[rand(0,995)]); // По заданию нужно выводить с помощью echo, моя функция prints как раз использует его для вывода, только в конце добавляет перенос строки
}
//------------END--------------








?>

