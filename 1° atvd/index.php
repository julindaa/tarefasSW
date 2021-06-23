<?php
    $a = 1; $b = -7; $c = 10;
    $delta = $b ** 2 -4*$a*$c;
    $x1 = (-$b + sqrt($delta))/ 2 * $a;
    $x2 = (-$b - sqrt($delta))/ 2 * $a;
   
    echo 'x1:';
    echo $x1;
    echo '<br>';
    echo 'x2:';
    echo $x2;
  ?>
  
  