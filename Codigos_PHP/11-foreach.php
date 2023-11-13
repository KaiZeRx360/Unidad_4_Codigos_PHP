<?php 

$arreglo_asociativo= [
    "nombre" => "Emanuel",
    "apellidos"=> ["Rojas","Emanuel"],
    "edad"=> 21,
    "direccion"=> "Av,mexico no 187"
];

foreach($arreglo_asociativo as $clave => $valor):
    print_r($clave);
    echo "<br>";
endforeach
?>