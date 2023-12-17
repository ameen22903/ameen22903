<?php
function calcCircArea($pi,$rad,$height)
{
    $area = $pi * ($rad * $rad) * $height;
    return $area;
}

$circPi = 3.14;
$circRad= 10;
$circHeight= 50;
$result = calcCircArea($circPi,$circRad,$circHeight);

echo "The volume of the cyclinder is: " . $result ." cm";

?>


