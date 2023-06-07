<?php
//$aray = [1,2,3,4,5,6,7,8,9];
//fore
$array = [
0 => '1',
1 =>'2',
2 =>'3',
3 =>'4',
4 =>'5',
4 => '0',
];
echo '<pre>';
echo count ($array);
var_dump($array);
print_r($array);
$odd = [];
foreach($array as $val)
{
    if ($val % 2 !== 0 ) {
        $odd[] = $val;
    }  
}
echo "odd";
 var_dump ($odd);
foreach($array as $val)
{
    if ($val %2== 0)
    {
        $even[] = $val;
    }
}
echo "even";
var_dump ($even);

