<?php

$baseTri = 10; 
$alturaTri = 8; 

$baseRe = 30;
$alturaRe = 4; 

$areaTri = 0.5 * $baseTri * $alturaTri;
$areaRe = $baseRe * $alturaRe;

echo "LAS MEDIDAS DEL TRIANGULO SON: "."<br>"."base: ".$baseTri."<br>"."altura: ".$alturaTri;
echo "<br>";
echo "LAS MEDIDAS DEL RECTANGULO SON:" ."<br>"."base: ".$baseRe."<br>"."altura: ".$alturaRe;
echo "<br>";
echo "El área del triángulo es: " . $areaTri . "<br>";
echo "El área del rectángulo es: " . $areaRe;

