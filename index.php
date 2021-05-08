<?php
function calculate($x,$y) {
    $add = $x + $y;
    $sub = $x - $y;
    $mul = $x * $y;
    $div = $x / $y;
    if ($x == 0) {
        if ($y == 0) {
            throw new Exception("Division by zero");
        }
    }
    $arr = [$add, $sub, $mul, $div];
    return $arr;
}
try {
    calculate(0,0);
} catch (Exception $e) {
    echo "Unable to divide.";
}
var_dump(calculate(0,0));

