<?php

$relato = $_POST['relato'];// con esto recibo lo del microrrelato en el textarea

if ($relato == "") { //este if es para que si se envía vacío lo rechace
    echo "Su microrrelato fue rechazado, no puedes enviarlo vacío";
} else// y este es el else del anterior if, si no está vacío entonces procede
{
    $palabras = explode(" ", $relato);// con esto divido al microrrelato en palabras, toma el espaciado como separador
    $numeroDePalabras = count($palabras);// esto cuenta las palabras
    $numeroDecaracteres = strlen($relato);// esto cuenta los caracteres(incluye signos de puntuación...etc y los espacios)
    if ($numeroDePalabras <= 100 && $numeroDecaracteres <= 700) { // if para verificar si cumple con los requisitos, no más de 100 palabras y no más de 700 caracteres
        echo "Su microrrelato fue aceptado con $numeroDePalabras palabras y $numeroDecaracteres caracteres";// si cumple se acepta
    } else {
        echo "Su microrrelato fue rechazado"; // si no cumple se rechaza

    }
    if ($numeroDePalabras > 100) {// si tiene más de 100 palabras  se rechaza por ese motivo

        echo " porque tiene un exceso de palabras ($numeroDePalabras palabras, no puede superar las 100)";

    }
    if ($numeroDecaracteres > 700)// lo mismo pero con los caracteres
        echo " y tiene un exceso de caracteres ($numeroDecaracteres caracteres, no puede superar los 700)";
// le dí en format document pero no lo ordenó muy bien, lo ordené más o menos
}
