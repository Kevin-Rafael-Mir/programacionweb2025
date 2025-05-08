<?php 
if ($_SERVER ["REQUEST_METHOD"]== "POST") {
    $edad = intval (value: $_POST ["edad"]);
     if ($edad>=11 && $edad<= 19) {
        echo"Tiene edad para el descuento";
     }else{
        echo"No tiene edad para el descuento";


     }




     }
    
    
        
?> 
