<?php

function calcArea($length,$width)
{
    $area = $length * $width;
    return $area;
}

$vallength = 5;
$valwidth = 10;
$result = calcArea($vallength,$valwidth);

echo"Area of Rectangle: " . $result;
?>
