<?php echo "Ejercicios de Constantes:";
const PI = 3.1416;
const PI = 3.14;
//1:¿Qué error arrojó PHP al intentar cambiar el valor de la constante?
//R1:El error que arrojó PHP al intentar cambiar el valor de la constante fue exactamente:
// "Warning: Constant PI already defined in C:\xampp\htdocs\programacionweb2025\Constantes.php on line 3"
//esto significa que ya la constante estaba definida y al intentar volver a hacerlo causa un error
//2:¿Qué nos indica este error sobre el comportamiento de las constantes en PHP?
//R2: Esto nos indica que una constante  no se puede definir más de una vez ya que esta es un valor que no cambia.
//3:¿En qué situaciones sería util utilizar constantes en lugar de variables?
//R3: Es util utilizar en casos en los que se necesita un valor que siempre es fijo, en este caso, el valor de Pi es simpre el mismo
