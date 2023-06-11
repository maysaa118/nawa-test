<?php
$string = "My name is Saly";
$first = substr($string,0,2);
$last = substr($string,-2,2);
echo '<pre>';
echo "First 2 chars are:($first)\n";
echo "Last 2 chars are:($last)\n";
if (strtolower($first)== strtolower($last)){
    echo "The first and last 2 chars are the same.\n";
}
else{
    echo"the first and last chars are not the same.\n";
}
echo '</pre>';
