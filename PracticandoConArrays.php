<?php 
//$ArrayVacio=[];
//$ArrayVacio[3]= 1;
//var_dump($ArrayVacio);

/*$planetas = [];
$planetas[] = 'Marte';
var_dump( $planetas );
$planetas[] = 'Tierra';
var_dump( $planetas );
$planetas[] = 'Venus';
var_dump( $planetas );
foreach ( $planetas as $planeta ){
    echo  $planeta."<br>";
}
*/

$Días =[];
$Dias[] ="Lunes "; 
// var_dump($Dias);
$Dias[] ="Martes "; 
// var_dump($Dias);
$Dias[] ="Miércoles "; 
// var_dump($Dias);
$Dias[] ="Jueves ";  
// var_dump($Dias);
$Dias[] ="Viernes "; 
// var_dump($Dias);
$Dias[] ="Sábado"; 
// var_dump($Dias);
$Dias[] ="Domingo"; 
// var_dump($Dias);

$Valornolaborable =0;
$Valorlaborable=0;
echo "<br>";
foreach ( $Dias as $Dia ){

    if($Dia =='Sábado'|| $Dia =='Domingo'){
        echo  "$Dia: es un día no laborable.". "<br>";
        $Valornolaborable++;
    } else {
        echo "$Dia: es un día laborable.". "<br> ";
        $Valorlaborable++;
    }
}
echo "<br>";
echo "Total de días:";
echo "<br>";
 echo ("Hay $Valorlaborable días laborables.");
echo "<br>";
 echo ("Hay $Valornolaborable días no laborables.");
echo "<br>";
    ?>
