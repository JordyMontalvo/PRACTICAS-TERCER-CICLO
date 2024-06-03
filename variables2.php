<?php
$nu1 = "5000"; 
$nu2 = "8000";

$m = bcmul($nu1, $nu2); 
$exp = bcpow($nu1, $nu2); 

$total = bcadd($m, $exp); 

$total1 = (string) $total;
$exp1 = (string) $exp;
$total2 = substr($total1, 0, 30);
$exp2 = substr($exp1, 0, 30);

echo '<br>';
echo ("La multiplicación es: " . $m . '<br>');
echo ("El exponente es: " . $exp2 . '<br>');
echo ("El total es: " . $total2 . '<br>');

