<?php
$num1 = 85;
$num2 = 85;
$hun =  100;
$first = abs($hun-$num1);
$second = abs($hun-$num2);
if ($first > $second) {
    echo "($second)",":The second numbber is the closer one.";
}
elseif ($first < $second) {
    echo "($first)",":The first numbber is the closer one.";
}
elseif ($first= $second) {
    echo "The first number:  ", "($first)",
     "and the second number: ","($second)"," are equale";
};
?>


