<?php
$num1 = 98565;
$num2 = 225;
$num3 = 6663;
echo '<pre>';
if (($num1>$num2) && ($num1>$num3)){
   echo "num1:",$num1," is the largest\n";
}

if (($num2 >$num1) && ($num2 >$num3)){
    echo "num2:",$num2," is the largest\n";
}

if (($num3 >$num2) && ($num3 >$num1)){
    echo "num3: ",$num3," is the largest\n";
}