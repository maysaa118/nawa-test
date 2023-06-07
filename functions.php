<?php
echo '<pre>';
//y+x
$y = 2;
$func = function($x) use ($y){
    return $x + $y; 
};
echo $func(9);
//a => A
function upper($s){
    return strtoupper($s);
}
$arr = ['ak','68b','ck5hhf','d8'];
$new = array_map(function($s){
    return strtoupper($s);
},$arr);
//var_dump($arr);
var_dump($new);

//
function sum(int $x = 1, int $y = 2 , int $z = 3) : float {
    return $x + $y + $z;
}

$s = sum (z: 5 , x:(int) "3s");

//arrow function
$x = fn($n = 0) => 1 + $s + $n;
echo $x();









