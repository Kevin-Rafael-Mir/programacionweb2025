<?php 
if ($_SERVER ["REQUEST_METHOD"]== "POST") {
$cantidadEnPesos = floatval (value: $_POST ["pesos"]);
    $valorDolar = 40; // Ejemplo: 1 USD = 38.5 UYU (puedes actualizarlo)
    $cantidadTotalDolares = $cantidadEnPesos / $valorDolar;
    echo "Resultado de la Conversión";
    echo "$cantidadEnPesos pesos uruguayos equivalen a $cantidadTotalDolares dólares";
}else {
    echo "Error en la solicitud.";


    }
    ?>