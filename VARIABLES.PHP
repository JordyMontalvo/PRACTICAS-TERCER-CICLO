<?php
$nu1 = "5000"; 
$nu2 = "8000";

$m = substr(bcmul($nu1, $nu2), 0, 30); 
$exp = substr(bcpow($nu1, $nu2), 0, 30); 
$total = substr(bcadd($m, $exp), 0, 30);

echo '<br>';
echo ("La multiplicación es: " . $m . '<br>');
echo ("El exponente es: " . $exp . '<br>');
echo ("El total es: " . $total . '<br>');
