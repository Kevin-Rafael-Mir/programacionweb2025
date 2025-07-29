<?php 
$videojuego=[
"nombre"=>"The Legend of Zelda",
"Consola"=>"NES",
 "Anio"=>1986,
"Precio"=>50.00,


];
//var_dump($videojuego);

/*echo "El nombre del videojuego es: {$videojuego ["nombre"]}.<br>
 Salió para la consola: {$videojuego ["Consola"]}.<br>
  Se estrenó en el año:{$videojuego ["Anio"]}.<br> 
   Su precio en dólares es:{$videojuego ["Precio"]}." ;*/

$videojuego["Stock"]= '10';
$videojuego["Indicador"]= true;
echo "El nombre del videojuego es: {$videojuego ["nombre"]}.<br>
 Salió para la consola: {$videojuego ["Consola"]}.<br>
  Se estrenó en el año:{$videojuego ["Anio"]}.<br> 
   Su precio en dólares es:{$videojuego ["Precio"]}.<br>
    {$videojuego ["Stock"]}. en Stock. <br>.";
        if ($videojuego["Indicador"]== "True"){


        echo "¿Está aún a la venta?: Sí";
        
    }
    else
    echo "¿Está aún a la venta?: No";

    
?> 