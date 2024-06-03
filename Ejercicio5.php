<?php

$Numero_Dado=mt_rand(1,6);
echo "el numero del dado es: ".$Numero_Dado;
$Numtext="";

switch($Numero_Dado)
{
    case 1:
        $Numtext="uno";
        break;
    case 2:
        $Numtext="Dos";
        break;
    case 3:
    case 4:
        $Numtext="Tres o cuatro";
        break;
    case 5:
        $Numtext="Cinco";
        break;
    case 6:
        $Numtext="Seis";
        
        break;
    default:
    $Numtext="Desconocido";
}
