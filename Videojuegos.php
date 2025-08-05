<?php
//Actividad 1
/*$videojuego = [
    "nombre" => "The Legend of Zelda",
    "Consola" => "NES",
    "Anio" => 1986,
    "Precio" => 50.00,


];
//actividad 2
//var_dump($videojuego);

echo "El nombre del videojuego es: {$videojuego["nombre"]}.<br>
 Salió para la consola: {$videojuego["Consola"]}.<br>
  Se estrenó en el año:{$videojuego["Anio"]}.<br> 
   Su precio en dólares es:{$videojuego["Precio"]}.";
//actividad 3

$videojuego["Stock"] = 10;
$videojuego["Indicador"] = true;
echo "El nombre del videojuego es: {$videojuego["nombre"]}.<br>
 Salió para la consola: {$videojuego["Consola"]}.<br>
  Se estrenó en el año:{$videojuego["Anio"]}.<br> 
   Su precio en dólares es:{$videojuego["Precio"]}.<br>
    {$videojuego["Stock"]}. en Stock. <br>.";
if ($videojuego["Indicador"] == "True") {


    echo "¿Está aún a la venta?: Sí";

} else
    echo "¿Está aún a la venta?: No";*/




//Actividad 4
$inventario = [
    'The Legend of Zelda' => [
        "nombre" => "The Legend of Zelda",
        "Consola" => "NES",
        "Anio" => 1986,
        "Precio" => 50.00,
        'Stock' => 10,
        'Indicador' => true
    ],

    'Super Mario Bros. 3' => [
        "nombre" => "The Legend of Zelda",
        "Consola" => "NES",
        "Anio" => 1988,
        "Precio" => 45.00,
        'Stock' => 15,
        'Indicador' => true,
    ],

    'Chrono Trigger' => [
        "nombre" => "Chrono Trigger",
        "Consola" => "SNES",
        "Anio" => 1995,
        "Precio" => 80.00,
        'Stock' => 5,
        'Indicador' => true
    ]
];

foreach ($inventario as $nombrejuego => $datos) {
    echo "Clave: $nombrejuego\n";
    echo "Consola: " . $datos['Consola'] . "<br>";

    
    echo "\n";
}


foreach ($inventario as $nombrejuego => $datos) {
    echo "Clave: $nombrejuego\n";
    echo "Consola: " . $datos['Consola'] . "<br>";

    
    echo "\n";
}



























































?>