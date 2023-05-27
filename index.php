<?php
/*function getTotal($a, $b)
{
    return $a+$b;
}*/

//echo getTotal(1, 2);

//lambda function
//laravel framework
/*$c = 20;
$d = 40;
$sum = function($a, $b) use($c,$d) {
    return $a+$b+$c+$d;
};
echo $sum(1, 2);*/

//truyền tham trị // tham chiếu
//tham trị: truyền giá trị của biến
//tham chiếu: truyền địa chỉ của biến
$a = 20;
$b = 40;

function total(&$a, &$b)
{
    $a = 100;
    $b = 200;
    return $a + $b;
}

echo total($a, $b);//300
echo $a;//100
echo $b;//200

function sum($a = 10, $b = 20)
{
    return $a + $b;
}

echo sum(1);//21
?>