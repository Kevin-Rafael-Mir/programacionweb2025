<?php
//Actividad4
$tripulacion =['Alex','Mia ','Rafael','Elena ','Pablo']; // Crear el Array
function agregarTripulante($nuevonombre,&$arreglo){
    $arreglo[]=$nuevonombre;
   

}
agregarTripulante('Kevin',$tripulacion);


var_dump($tripulacion);//Comprobación.

function evacuarTripulante(&$tripulacion){
    
    $cantidad= count($tripulacion);
    $posicion= $cantidad-1;
    $valor=$tripulacion[$posicion];
    unset($tripulacion[$posicion]);// Elimina el valor de el último índice
    


}
var_dump($tripulacion);//Comprobación.
evacuarTripulante($tripulacion);
var_dump($tripulacion);//Comprobación.


