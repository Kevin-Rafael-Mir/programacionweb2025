<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cantidadEnPesos = floatval(value: $_POST["pesos"]);
    $moneda = $_POST["moneda"];
    //$valorDolar = 40;
    //$valorEUR = 43;
    //$valorBRL = 8;
    $valoresmoneda=[40,43,8,];         

   
    if ($moneda == "USD") {
        $cantidadTotal = $cantidadEnPesos / $valoresmoneda[0];
        $redondeado = round($cantidadTotal , 2);// esto redondea y deja solamente dos dígitos después de la coma (lo busqué en Google)
        echo "Resultado de la Conversión: ";
        echo "$cantidadEnPesos pesos uruguayos equivalen a $redondeado dólares";
    }else if ($moneda == "EUR") {
    $cantidadTotal = $cantidadEnPesos /  $valoresmoneda[1];
    $redondeado = round($cantidadTotal , 2);
    echo "Resultado de la Conversión: ";
    echo "$cantidadEnPesos pesos uruguayos equivalen a $redondeado euros";
} else if ($moneda == "BRL") {
    $cantidadTotal = $cantidadEnPesos /  $valoresmoneda[2];
    $redondeado = round($cantidadTotal , 2);
    echo "Resultado de la Conversión: "; 
    echo "$cantidadEnPesos pesos uruguayos equivalen a $redondeado reales";

} }

else {
    echo "Error en la solicitud.";


}
?>