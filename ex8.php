
<?php
$string = "Maysaa";
$str = strlen($string);
$show = "";

for($i=$str-1;$i>=0;$i--){
    $show.=$string[$i];
}
echo "$show";
?>