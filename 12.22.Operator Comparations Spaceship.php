<?php

$x = 5;
$y = 10;

echo ($x <=> $y); // Return -1 because $x is less than $y
echo "<br>";

$x = 10;
$y = 10;

echo ($x <=> $y); // Return 0 because values are equal
echo "<br>";

$x = 15;
$y = 10;

echo ($x <=> $y); // Return +1 because $x is greater than $y