<?php 
if ($_SERVER ["REQUEST_METHOD"]== "POST") {
$cantidadEnPesos = floatval (value: $_POST ["pesos"]);
    $valorDolar = 40; 
    $valorEUR = 43; 
    $valorBRL = 8; 
    $cantidadTotal = $cantidadEnPesos / $valorDolar;
    echo "Resultado de la Conversión";
    echo "$cantidadEnPesos pesos uruguayos equivalen a $cantidadTotalDolares dólares";
}else {
    echo "Error en la solicitud.";


    }
    ?>