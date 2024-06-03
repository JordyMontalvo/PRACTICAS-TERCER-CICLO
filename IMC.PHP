<?php
$peso = 70;
$altura = 1.80; 

$imc = $peso / ($altura * $altura);

echo "el peso del paciente es: ".$peso."<br>"."su altura es: ".$altura;
echo"<br>";
echo "El índice de masa corporal (IMC) es: " . number_format($imc, 2);

