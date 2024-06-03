<?php
$edad= 18;
if($edad<0){
    echo("No se puede tener una edad negativa");
}
elseif($edad>=0 && $edad<18){
echo("usted es menor de edad");
}else{
    echo("Es usted mayor de edad");
}
