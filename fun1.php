
<?php 

echo '<pre>';



 $num1 = [3,6,4,5,9,7,8];
 $num2 = [1,2,3,4,5,6];
 $loop = count($num1) >count($num2) ? $num1 : $num2;
 foreach ($loop as $key => $value){
    $multi[] = ($num1[$key] ?? 0) * ($num2[$key] ?? 0);
 }
 var_dump($key);
 var_dump($multi);
