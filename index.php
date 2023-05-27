<?php
function getTotal($a, $b)
{
    return $a+$b;
}

//echo getTotal(1, 2);

//lambda function
//laravel framework
$c = 20;
$d = 40;
$sum = function($a, $b) use($c,$d) {
    return $a+$b+$c+$d;
};
echo $sum(1, 2);
?>