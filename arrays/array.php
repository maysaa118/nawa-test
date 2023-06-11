<?php
$arr = [
    'A',
    1.5 => 'B',
    1 => 'C',
    null => 'D',
    '' => 'E',
    '1' => 'F',
    false => 'G',
    'name' => "Maysaa",
    'PHP',
];

$arr[] = 'Nawa';

[,,,$b] = $arr;
echo $b;

asort($arr);
array_push($arr, 'A' ,'B');
$last_elm = array_pop($arr);
echo  '<pre>';

var_dump($arr);
$x = $arr[2];
unset($arr[2]);
array_unshift($arr,$x);
$first = array_shift($arr);
echo $first;


echo count($arr);

var_dump($arr);


