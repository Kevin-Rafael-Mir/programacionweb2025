<?php 
$totalCompra = 150; 
$umbralDescuento = 100; echo "Monto total de compra: $totalCompra <br>"; echo "Umbral de activación del descuento: 
$umbralDescuento <br>"; 
if ($totalCompra > $umbralDescuento) { 
echo "¡Bien ahi! Tu compra califica para el descuento."; } else { echo "Tu compra no alcanza el umbral de activación del descuento. Segui comprando para obtener descuentos adicionales."; 
} 
/*1:¿Cuál es el propósito del archivo"descuentos.php" en la aplicación de la tienda online
 2:¿Qué variables se definen dentro del archivo y qué información representan? 
 3:¿Cómo se determina si un cliente califica para un descuento con base en la lógica implementada en el programa? 
Respuestas:
1:Mostrar el Monto total de compra, el umbral de activación del descuento y si la compra califica para el descuento o no.
2:$totalCompra: la cantiad que dinero que gasta el cliente
  $umbralDescuento: es el mínimo de la cantidad de dinero que debe de gastar el cliente para que puedda usar el descuento 
3:Si el cliente supera el minimo de la cantidad de dinero que debe de gastar para activar el descuento entonces se le habilita, sino, no


*/



?> 

