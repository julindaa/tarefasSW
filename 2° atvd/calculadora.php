<?php


$a = $_GET["A"];
$b = $_GET["B"];
$c = $_GET["C"];

$delta = $b**2-(4*$a*$c);

$x1 = (-$b + sqrt($delta))/2*$a;
$x2 = (-$b - sqrt($delta))/2*$a;

echo '<h1>ax2+bx+c</h1>';
echo '<br>';
echo 'x1:' . $x1;
echo '<br>';
echo 'x2:' . $x2;


 

?>