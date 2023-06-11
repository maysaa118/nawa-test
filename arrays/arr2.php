<?php
$str = [ 'Maysaa', 'Azmy', 'Saad','khalil'];
$long ='';
echo '<pre>';
var_dump($str);
//$max = '';
foreach ($str as $str) {
    if (strlen($str)> strlen($long)){
        $long = $str;
    }
}
echo $long;